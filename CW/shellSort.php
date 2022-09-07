<?php


$title = "Hanoy tower";

$time_start = microtime(true);

function ShellSort($arr) {
    $k=0;
    $length = count($arr);
    $gap[0] = (int) ($length / 2);
    while($gap[$k] > 1) {
        $k++;
        $gap[$k]= (int)($gap[$k-1] / 2);
    }
    for($i = 0; $i <= $k; $i++){
        $step = $gap[$i];
        for($j = $step; $j < $length; $j++) {
            $temp = $arr[$j];
            $p = $j - $step;
            while($p >= 0 && $temp['price'] < $arr[$p]['price']) {
                $arr[$p + $step] = $arr[$p];
                $p = $p - $step;
            }
            $arr[$p + $step] = $temp;
        }
    }

}
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Отсортированный массив {$title} отсортирован за $time seconds\n";