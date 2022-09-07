<?php
include "U9/CW/IarrayInterface.php";
include "U9/CW/heapSort.php";
include "U9/CW/bubbleSort.php";
include "U9/CW/shellSort.php";
include "U9/CW/shakeSort.php";
include "U9/CW/quickSort.php";
include "U9/CW/eulerFunc.php";





$test = new Test();

$arr = $test->getArray();
//var_dump($arr);



bubbleSort($arr);
heapSort($arr);
ShellSort($arr);
shakerSort($arr);
//quickSort($arr);
Euler(1001);







