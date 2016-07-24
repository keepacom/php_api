<?php
namespace Keepa\helper;

class ProductAnalyzer
{

    /**
     * finds the extreme point in the specified interval
     *
     * @param $csv int[] value/price history csv
     * @param $start int start of the interval (keepa time minutes), can be 0.
     * @param $end int end of the interval (keepa time minutes), can be in the future (Integer.MAX_VALUE).
     * @param $isMinimum bool whether to find the minimum or maximum
     * @return int extremePoint (value/price) in the given interval or -1 if no extreme point was found.
     * @deprecated use {@link ProductAnalyzer#getExtremePointInInterval(int[], int, int, boolean, CsvType)} instead.
     */
    public static function getExtremePointInInterval($csv, $start, $end, $isMinimum)
    {
        if ($csv == null || count($csv) < 4 || $csv[count($csv) - 1] == -1 || $csv[count($csv) - 3] == -1)
            return -1;

        $extremeValue = -1;
        if ($isMinimum)
            $extremeValue = PHP_INT_MAX;

        for ($i = 0; $i < count($csv); $i += 2) {
            $date = $csv[$i];

            if ($date <= $start) continue;
            if ($date >= $end) break;
            if ($csv[$i + 1] == -1) continue;

            if ($isMinimum)
                $extremeValue = min($extremeValue, $csv[$i + 1]);
            else
                $extremeValue = max($extremeValue, $csv[$i + 1]);
        }

        if ($extremeValue == PHP_INT_MAX) return -1;
        return $extremeValue;
    }

    /**
     * finds the extreme point in the specified interval
     *
     * @param $csv int[] value/price history csv
     * @param $start int start of the interval (keepa time minutes), can be 0.
     * @param $end int end of the interval (keepa time minutes), can be in the future (Integer.MAX_VALUE).
     * @param $type CsvType the type of the csv data. If the csv includes shipping costs the extreme point will be the landing price (price + shipping).
     * @return int[]extremePoints (time, lowest value/price, time, highest value/price) in the given interval or -1 if no extreme point was found. If the csv includes shipping costs it will be the landing price (price + shipping).
     */
    public static function getExtremePointsInIntervalWithTime($csv, $start, $end, CsvType $type)
    {
        if ($csv == null || $start >= $end || count($csv) < ($type->isWithShipping ? 6 : 4))
            return [-1, -1, -1, -1];

        $extremeValue = [-1, PHP_INT_MAX, -1, -1];

        $lastTime = self::getLastTime($csv, $type);
        $firstTime = $csv[0];
        if ($lastTime == -1 || $firstTime == -1 || $firstTime > $end) return [-1, -1, -1, -1];

        if ($firstTime > $start)
            $start = $firstTime;

        $loopIncrement = $type->isWithShipping ? 3 : 2;
        $adjustedIndex = $type->isWithShipping ? 2 : 1;

        for ($i = 1, $j = count($csv); $i < $j; $i += $loopIncrement) {
            $c = $csv[$i];
            $date = $csv[$i - 1];
            if ($date >= $end)
                break;

            if ($c != -1) {
                if ($type->isWithShipping) {
                    $s = $csv[$i + 1];
                    $c += $s < 0 ? 0 : $s;
                }

                if ($date >= $start) {
                    if ($c < $extremeValue[1]) {
                        $extremeValue[1] = $c;
                        $extremeValue[0] = $csv[$i - 1];
                    }

                    if ($c > $extremeValue[3]) {
                        $extremeValue[3] = $c;
                        $extremeValue[2] = $csv[$i - 1];
                    }
                } else {
                    $isValid = false;
                    if ($i == $j - $adjustedIndex) {
                        $isValid = true;
                    } else {
                        $nextDate = $csv[$i + $adjustedIndex];
                        if ($nextDate >= $end || ($nextDate >= $start))
                            $isValid = true;
                    }

                    if ($isValid) {
                        if ($c < $extremeValue[1]) {
                            $extremeValue[1] = $c;
                            $extremeValue[0] = $start;
                        }

                        if ($c > $extremeValue[3]) {
                            $extremeValue[3] = $c;
                            $extremeValue[2] = $start;
                        }
                    }
                }
            }
        }

        if ($extremeValue[1] == PHP_INT_MAX) return [-1, -1, -1, -1];
        return $extremeValue;
    }

    /**
     * Get the last value/price change.
     *
     * @param $csv int[] value/price history csv
     * @param $type CsvType the type of the csv data. If the csv includes shipping costs the extreme point will be the landing price (price + shipping).
     * @return int the last value/price change delta. If the csv includes shipping costs it will be the delta of the the landing prices (price + shipping).
     */
    public static function getDeltaLast($csv, CsvType $type)
    {
        if ($type->isWithShipping) {
            if ($csv == null || count($csv) < 6 || $csv[count($csv) - 1] == -1 || $csv[count($csv) - 5] == -1)
                return 0;

            $v = $csv[count($csv) - 5];
            $s = $csv[count($csv) - 4];
            $totalLast = $v < 0 ? $v : $v + ($s < 0 ? 0 : $s);

            $v = $csv[count($csv) - 2];
            $s = $csv[count($csv) - 1];
            $totalCurrent = $v < 0 ? $v : $v + ($s < 0 ? 0 : $s);

            return $totalCurrent - $totalLast;
        } else {
            if ($csv == null || count($csv) < 4 || $csv[count($csv) - 1] == -1 || $csv[count($csv) - 3] == -1)
                return 0;

            return $csv[count($csv) - 1] - $csv[count($csv) - 3];
        }
    }

    /**
     * Get the last value/price.
     *
     * @param $csv int[] value/price history csv
     * @param $type CsvType the type of the csv data.
     * @return int the last value/price. If the csv includes shipping costs it will be the landing price (price + shipping).
     */
    public static function getLast($csv, CsvType $type)
    {
        if ($csv == null || count($csv) == 0) return -1;

        if ($type->isWithShipping) {
            $s = $csv[count($csv) - 1];
            $v = $csv[count($csv) - 2];
            return $v < 0 ? $v : $v + ($s < 0 ? 0 : $s);
        }

        return $csv[count($csv) - 1];
    }

    /**
     * Get the time (keepa time minutes) of the last entry. This does not correspond to the last update time, but to the last time we registered a price/value change.
     *
     * @param $csv int[] value/price history csv
     * @param $type CsvType the type of the csv data.
     * @return int keepa time minutes of the last entry
     */
    public static function getLastTime($csv, CsvType $type)
    {
        return $csv == null || count($csv) == 0 ? -1 : $csv[count($csv) - ($type->isWithShipping ? 3 : 2)];
    }

    /**
     * Get the value/price at the specified time
     *
     * @param $csv int[] value/price history csv
     * @param $time int value/price lookup time (keepa time minutes)
     * @param $type CsvType the type of the csv data.
     * @return int the price or value of the product at the specified time. -1 if no value was found or if the product was out of stock. If the csv includes shipping costs it will be the landing price (price + shipping).
     */
    public static function getValueAtTime($csv, $time, CsvType $type)
    {
        if ($csv == null || count($csv) == 0) return -1;
        $i = 0;

        $loopIncrement = ($type->isWithShipping ? 3 : 2);
        for (; $i < count($csv); $i += $loopIncrement)
            if ($csv[$i] > $time) break;

        if ($i > count($csv)) return self::getLast($csv, $type);
        if ($i < $loopIncrement) return -1;

        if ($type->isWithShipping) {
            $v = $csv[$i - 2];
            $s = $csv[$i - 1];
            return $v < 0 ? $v : $v + ($s < 0 ? 0 : $s);
        }

        return $csv[$i - 1];
    }

    /**
     * Get the price and shipping cost at the specified time
     *
     * @param $csv int[] price with shipping  history csv
     * @param $time int price lookup time (keepa time minutes)
     * @return int[] [price, shipping] - the price and shipping cost of the product at the specified time. [-1, -1] if no price was found or if the product was out of stock.
     */
    public static function getPriceAndShippingAtTime($csv, $time)
    {
        if ($csv == null || count($csv) == 0) return [-1, -1];
        $i = 0;

        for (; $i < count($csv); $i += 3) {
            if ($csv[$i] > $time) {
                break;
            }
        }

        if ($i > count($csv)) return self::getLastPriceAndShipping($csv);
        if ($i < 3) return [-1, -1];

        return [$csv[$i - 2], $csv[$i - 1]];
    }


    /**
     * Get the last price and shipping cost.
     *
     * @param $csv int[] price with shipping history csv
     * @return int[] [price, shipping] - the last price and shipping cost.
     */
    public static function getLastPriceAndShipping($csv)
    {
        if (count($csv) == null || count($csv) < 3) return [-1, -1];
        return [$csv[count($csv) - 2], $csv[count($csv) - 1]];
    }

    /**
     * @param $csv int[] value/price history csv
     * @param $time int time to begin the search
     * @param $type CsvType the type of the csv data.
     * @return int the closest value/price found to the specified time. If the csv includes shipping costs it will be the landing price (price + shipping).
     */
    public static function getClosestValueAtTime($csv, $time, CsvType $type)
    {
        if ($csv == null || count($csv) == 0) return -1;
        $i = 0;
        $loopIncrement = ($type->isWithShipping ? 3 : 2);
        for (; $i < count($csv); $i += $loopIncrement)
            if ($csv[$i] > $time) break;

        if ($i > count($csv)) return self::getLast($csv, $type);
        if ($i < $loopIncrement) {
            if ($type->isWithShipping) {
                if (count($csv) < 4) {
                    $v = $csv[2];
                    $s = $csv[1];
                    return $v < 0 ? $v : $v + ($s < 0 ? 0 : $s);
                } else
                    $i += 3;
            } else {
                if (count($csv) < 3)
                    return $csv[1];
                else
                    $i += 2;
            }
        }

        if ($type->isWithShipping) {
            if ($csv[$i - 2] != -1) {
                $v = $csv[$i - 2];
                $s = $csv[$i - 1];
                return $v < 0 ? $v : $v + ($s < 0 ? 0 : $s);
            } else {
                for (; $i < count($csv); $i += $loopIncrement) {
                    if ($csv[$i - 2] != -1) break;
                }
                if ($i > count($csv)) return self::getLast($csv, $type);
                if ($i < 3) return -1;
                $v = $csv[$i - 2];
                $s = $csv[$i - 1];
                return $v < 0 ? $v : $v + ($s < 0 ? 0 : $s);
            }
        } else {
            if ($csv[$i - 1] != -1)
                return $csv[$i - 1];
            else {
                for (; $i < count($csv); $i += 2) {
                    if ($csv[$i - 1] != -1) break;
                }
                if ($i > count($csv)) return self::getLast($csv, $type);
                if ($i < 2) return -1;
                return $csv[$i - 1];
            }
        }
    }

    /**
     * finds the lowest and highest value/price of the csv history
     *
     * @param $csv int[] value/price history csv
     * @param $type CsvType the type of the csv data.
     * @return int[] [0] = low, [1] = high.  If the csv includes shipping costs the extreme point will be the landing price (price + shipping). [-1, -1] if insufficient data.
     */
    public static function getLowestAndHighest($csv, CsvType $type)
    {
        $minMax = self::getExtremePointsInIntervalWithTime($csv, 0, PHP_INT_MAX, $type);
        return [$minMax[1], $minMax[3]];
    }

    /**
     * finds the lowest and highest value/price of the csv history including the dates of the occurrences (in keepa time minutes).
     *
     * @param $csv int[] value/price history csv
     * @param $type CsvType the type of the csv data.
     * @return int[] [0] = low time, [1] = low, [2] = high time, [3] = high.  If the csv includes shipping costs the extreme point will be the landing price (price + shipping). [-1, -1, -1, -1] if insufficient data.
     */
    public static function getLowestAndHighestWithTime($csv, CsvType $type)
    {
        return self::getExtremePointsInIntervalWithTime($csv, 0, PHP_INT_MAX, $type);
    }

    /**
     * Returns a weighted mean of the products csv history in the last X days
     *
     * @param $csv int[] value/price history csv
     * @param $now int current keepa time minutes
     * @param $type CsvType the type of the csv data.
     * @param $days double number of days the weighted mean will be calculated for (e.g. 90 days, 60 days, 30 days)
     * @return int the weighted mean or -1 if insufficient history csv length (less than a day). If the csv includes shipping costs it will be the wieghted mean of the landing price (price + shipping).
     */
    public static function calcWeightedMean($csv, $now, $days, CsvType $type)
    {
        $avg = -1;

        if ($csv == null || count($csv) == 0)
            return $avg;

        $size = count($csv);
        $loopIncrement = ($type->isWithShipping ? 3 : 2);

        $duration = ($csv[$size - $loopIncrement] - $csv[0]) / 60;
        $count = 0;

        if ($size < 4 || $duration < 24 * 7)
            return $avg;

        if ($duration < 24 * $days)
            $days = floor($duration / 24.0);

        $adjustedIndex = $type->isWithShipping ? 2 : 1;

        for ($i = 1, $j = $size; $i < $j; $i = $i + $loopIncrement) {
            $c = $csv[$i];
            if ($c != -1) {
                if ($type->isWithShipping) {
                    $s = $csv[$i + 1];
                    $c += $s < 0 ? 0 : $s;
                }

                if ($now - $csv[$i - 1] < $days * 24 * 60) {
                    if ($i == 1) {
                        continue;
                    }

                    if ($avg == -1) {
                        if ($csv[$i - $loopIncrement] == -1) {
                            $avg = 0;
                        } else {
                            $tmpCount = ($days * 24 * 60 - ($now - $csv[$i - 1])) / (24 * 60.0);
                            $count = $tmpCount;
                            $price = $csv[$i - $loopIncrement];
                            if ($type->isWithShipping) {
                                $s = $csv[$i - 2];
                                $price += $s < 0 ? 0 : $s;
                            }

                            $avg = intval(floor($price * $tmpCount));
                        }
                    }

                    if ($i + $adjustedIndex == $j) {
                        if ($csv[$i - $loopIncrement] == -1) {
                            continue;
                        }
                        $tmpCount = (($now - $csv[$j - $loopIncrement]) / (24.0 * 60.0));
                        $count += $tmpCount;
                        $avg += $c * $tmpCount;
                    } else {
                        $tmpCount = (($csv[$i + $adjustedIndex] - $csv[$i - 1]) / (24.0 * 60.0));
                        $count += $tmpCount;
                        $avg += $c * $tmpCount;
                    }
                } else {
                    if ($i == $j - $adjustedIndex && $csv[$i] != -1) {
                        $count = 1;
                        $avg = $c;
                    }
                }
            }
        }

        if ($avg != -1) {
            if ($count != 0)
                $avg = intval(floor($avg / $count));
            else
                $avg = -1;
        }

        return $avg;
    }

    /**
     * Returns true if the CSV was out of stock in the given period.
     *
     * @param $csv int[] value/price history csv
     * @param $start int start of the interval (keepa time minutes), can be 0.
     * @param $end int end of the interval (keepa time minutes), can be in the future (Integer.MAX_VALUE).
     * @param $type CsvType the type of the csv data.
     * @return bool was out of stock in interval, null if the csv is too short to tell.
     */
    public static function getOutOfStockInInterval($csv, $start, $end, CsvType $type)
    {
        if ($type->isWithShipping) {
            if ($csv == null || count($csv) < 6)
                return null;
        } else if ($start >= $end || $csv == null || count($csv) < 4)
            return null;

        $loopIncrement = ($type->isWithShipping ? 3 : 2);
        for ($i = 0; $i < count($csv); $i += $loopIncrement) {
            $date = $csv[$i];
            if ($date <= $start) continue;
            if ($date >= $end) break;
            if ($csv[$i + 1] == -1) return true;
        }

        return false;
    }

    /**
     * Returns a the percentage of time in the given interval the price type was out of stock
     *
     * @param $csv int[] value/price history csv
     * @param $now int current keepa time minutes
     * @param $start int start of the interval (keepa time minutes), can be 0.
     * @param $end int end of the interval (keepa time minutes), can be in the future (Integer.MAX_VALUE).
     * @param $type CsvType the type of the csv data.
     * @param $trackingSince int the product object's trackingSince value
     * @return int percentage between 0 and 100 or -1 if insufficient data. 100 = 100% out of stock in the interval.
     */
    public static function getOutOfStockPercentageInInterval($csv, $now, $start, $end, CsvType $type, $trackingSince)
    {
        if (!$type->isPrice) return -1;
        if ($start >= $end) return -1;
        if ($csv == null || count($csv) == 0)
            return -1;

        $size = count($csv);
        $loopIncrement = ($type->isWithShipping ? 3 : 2);

        $lastTime = self::getLastTime($csv, $type);
        $firstTime = $csv[0];

        if ($lastTime == -1 || $firstTime == -1 || $firstTime > $end || $trackingSince > $end) return -1;

        $count = 0;

        if ($trackingSince > $start)
            $start = $trackingSince;

        if ($end > $now)
            $end = $now;

        $adjustedIndex = $type->isWithShipping ? 2 : 1;

        for ($i = 1, $j = $size; $i < $j; $i += $loopIncrement) {
            $c = $csv[$i];
            $date = $csv[$i - 1];

            if ($date >= $end)
                break;

            if ($c != -1) {
                if ($date >= $start) {
                    if ($i == 1) {
                        if ($i + $adjustedIndex == $j) {
                            return 0;
                        }
                    }

                    $nextDate = null;
                    if ($i + $adjustedIndex == $j) {
                        $nextDate = $now;
                    } else {
                        $nextDate = $csv[$i + $adjustedIndex];
                        if ($nextDate > $end)
                            $nextDate = $end;
                    }

                    $tmpCount = $nextDate - $date;

                    $count += $tmpCount;
                } else {
                    if ($i == $j - $adjustedIndex) {
                        return 0;
                    } else {
                        $nextDate = $csv[$i + $adjustedIndex];

                        if ($nextDate >= $end)
                            return 0;

                        if ($nextDate >= $start)
                            $count = $nextDate - $start;
                    }
                }
            }
        }

        if ($count > 0)
            $count = 100 - intval(floor(($count * 100) / ($end - $start)));
        else if ($count == 0) {
            $count = 100;
        }

        return (int)$count;
    }
}

