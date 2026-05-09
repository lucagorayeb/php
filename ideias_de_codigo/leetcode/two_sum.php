<?php

$nums = [2,7,11,15]; 
$target = 9;

function twoSum($nums, $target) {
    for($i = 0; $i < count($nums); $i++){
        $sum = $nums[$i] + $nums[$i+1];
        if($sum == $target){
            return [$i, $i+1];
        }
    }
}