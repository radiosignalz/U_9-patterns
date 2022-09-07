<?php
include "CW/IarrayInterface.php";
include "CW/heapSort.php";
include "CW/bubbleSort.php";
include "CW/shellSort.php";
include "CW/shakeSort.php";
include "CW/quickSort.php";
include "CW/eulerFunc.php";





$test = new Test();

$arr = $test->getArray();
//var_dump($arr);



bubbleSort($arr);
heapSort($arr);
ShellSort($arr);
shakerSort($arr);
//quickSort($arr);
Euler(1001);







