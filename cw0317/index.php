<?php
// https://www.codewars.com/kata/55983863da40caa2c900004e/train/php

function nextBigger($n) {
    $rez = -1;
    $rezArr = [];
    $arr = str_split(strval($n));
    $k= count($arr);
    if($k > 1) {
        foreach(range($k - 1, 1) as $i) {
            if($arr[$i - 1] < $arr[$i]) {
                $partArr = array_slice($arr, $i);
                sort($partArr);
                foreach(range(0, count($partArr) - 1) as $j) {
                    if($partArr[$j] > $arr[$i - 1]) {
                        $t = $arr[$i - 1];
                        $arr[$i - 1] = $partArr[$j];
                        $partArr[$j] = $t;
                        foreach(range(0, $i - 1) as $l) {
                            $rezArr[] = $arr[$l];
                        }
                        foreach(range(0, count($partArr) - 1) as $l) {
                            $rezArr[] = $partArr[$l];
                        }
                        $str = implode('', $rezArr);
                        $rez = intval($str);
                        return $rez;
                    }
                }
            }
        }
    }
    return $rez;
}
echo nextBigger(5244653);
echo '<br>5244653';
// echo nextBigger(122);
// echo '<br>122';
