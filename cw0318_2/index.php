<?php
// https://www.codewars.com/kata/52597aa56021e91c93000cb0/train/php

function landPerimeter(array $land) :int
{
    function near(array $arr, int $x, int $y, int $limX, int $limY) :int {
        $cnt = 0;
        if($y - 1 >= 0 && $arr[$x][$y - 1] == 'X') $cnt++;
        if($x - 1 >= 0 && $arr[$x - 1][$y] == 'X') $cnt++;
        if($y + 1 <= $limY && $arr[$x][$y + 1] == 'X') $cnt++;
        if($x + 1 <= $limX && $arr[$x + 1][$y] == 'X') $cnt++;
        return $cnt;
    }
    $count = 0;
    $countN = 0;
    $xy = []; 
    foreach($land as $h => $str) {
        $strArr = [...str_split($str)]; 
        foreach($strArr as $w => $piece) {
            $bigArr[$h][$w] = $piece;
            if($piece == 'X') {
                $count++;
                $xy[] = [$h, $w];
            }    
        }
    }
    foreach($xy as $coord) {
        $countN += near($bigArr, $coord[0], $coord[1], $h, $w);
    }
    return 'Total land perimeter: ' . ($count * 4 - $countN);
}
echo '<pre>';
var_dump(landPerimeter(['XOOXO','XOOXO','OOOXO','XXOXO','OXOOO']));

// function land_perimeter($arr) {
//     $result = 0;
    
//     foreach($arr as $lKey => $lineArr)
//       for ($x = 0; $x < strlen($lineArr); $x++) {
//         if($lineArr[$x] != 'X') continue;
//         if($lineArr[$x -1]!= 'X') $result++;
//         if($lineArr[$x +1] != 'X') $result++;
//         if($arr[$lKey +1][$x] != 'X') $result++;
//         if($arr[$lKey -1][$x] != 'X') $result++;      
//       }
//       return 'Total land perimeter: '.$result;
//     }
    



