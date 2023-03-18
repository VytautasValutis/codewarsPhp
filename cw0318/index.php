<?php
// https://www.codewars.com/kata/52597aa56021e91c93000cb0/train/php

function moveZeros(array $items) :array
{
    $arrNz = [];
    $arrZ = [];
    foreach($items as $it) {
        if($it == 0 && is_numeric($it)) {
            $arrZ[] = (int) $it;
        } else {
            $arrNz[] = $it;
        }
    }
    return array_merge($arrNz, $arrZ);
}
echo '<pre>';
// var_dump(["a",0,0,"b",null,"c","d",0,1,false,0,1,0,3,[],0,1,9,0,0,0,0,9]);
var_dump(moveZeros([9,0.0,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9]));

// function moveZeros(array $items): array {
//     return array_pad(array_filter($items, function($x){return $x !== 0 and $x !== 0.0;}), count($items), 0);
//   }




