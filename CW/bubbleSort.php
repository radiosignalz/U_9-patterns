<?php
$title = " Bubble Sort";

$time_start = microtime(true);
function bubbleSort($arr){
    for($i=0; $i<count($arr); $i++){
        $count = count($arr);
        for($j=$i+1; $j<$count; $j++){
            if($arr[$i]>$arr[$j]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }
//    var_dump($arr);
    return $arr;
}
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Отсортированный массив {$title} отсортирован за $time seconds\n";