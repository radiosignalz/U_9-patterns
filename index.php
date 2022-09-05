<?php
include "U9/CW/heapSort.php";
include "U9/CW/shellSort.php";
//include "U9/binarySearch.php";
//include "U9/HW9/HW9.php";



$arr = range(1, 10000);
shuffle($arr);





heapSort($arr);
ShellSort($arr);


