<?php


$title = "Hanoy tower";

$time_start = microtime(true);

function ShellSort($elements) {
    $k=0;
    $length = count($elements);
    $gap[0] = (int) ($length / 2);
    while($gap[$k] > 1) {
        $k++;
        $gap[$k]= (int)($gap[$k-1] / 2);
    }
    for($i = 0; $i <= $k; $i++){
        $step = $gap[$i];
        for($j = $step; $j < $length; $j++) {
            $temp = $elements[$j];
            $p = $j - $step;
            while($p >= 0 && $temp['price'] < $elements[$p]['price']) {
                $elements[$p + $step] = $elements[$p];
                $p = $p - $step;
            }
            $elements[$p + $step] = $temp;
        }
    }
//   var_dump($elements);
}
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Отсортированный массив {$title} отсортирован за $time seconds \n>";