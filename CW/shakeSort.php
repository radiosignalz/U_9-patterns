<?php
$title = "Shaker sort";
$time_start = microtime(true);
function shakerSort ($arr) {
    $n = count($arr);
    $left = 0;
    $right = $n - 1;
    do {
        for ($i = $left; $i < $right; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1],
                    $arr[$i]);
            }
        }
        $right -= 1;
        for ($i = $right; $i > $left; $i--) {
            if ($arr[$i] < $arr[$i - 1]) {
                list($arr[$i], $arr[$i - 1]) = array($arr[$i - 1],
                    $arr[$i]);
            }
        }
        $left += 1;
    } while ($left <= $right);
//    var_dump($arr);
    return $arr;

}
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Отсортированный массив {$title} отсортирован за $time seconds\n";
