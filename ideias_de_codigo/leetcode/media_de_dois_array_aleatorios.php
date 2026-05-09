<?php

$nums1 = [1,2];
$nums2 = [3,4];

function findMedianSortedArrays($nums1, $nums2){
    $sum = 0;
    foreach($nums1 as $num1){
        $sum = $sum + $num1;
    }

    foreach($nums2 as $num2){
        $sum = $sum + $num2;
    }

    return $sum / (count($nums1) + count($nums2));
}
