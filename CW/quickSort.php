<?php
$title = "Quick sort";
$time_start = microtime(true);

function quickSort(&$arr) {
    $low = min($arr);
    $high = max($arr);

    $i = $low;
    $j = $high;
    $middle = $arr[ ( $low + $high ) / 2 ]; // middle – опорный элемент; в

do {
    while($arr[$i] < $middle) ++$i; // Ищем элементы для правой части
    while($arr[$j] > $middle) --$j; // Ищем элементы для левой части
if($i <= $j){
// Перебрасываем элементы
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
// Следующая итерация
    $i++; $j--;
}
}
while($i < $j);
if($low < $j){
// Рекурсивно вызываем сортировку для левой части
    quickSort($arr);
}
if($i < $high){
// Рекурсивно вызываем сортировку для правой части
    quickSort($arr);
}
}
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Отсортированный массив {$title} отсортирован за $time seconds\n";