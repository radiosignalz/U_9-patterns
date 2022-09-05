<?php
include "CW/heapSort.php";
include "CW/shellSort.php";




$arr = range(1, 10000);
shuffle($arr);





heapSort($arr);
ShellSort($arr);


