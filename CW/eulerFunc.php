<?php
function Euler($n)
{
    function isPrime($n)
    {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
                break;
            }
        }
        return true;
    }

    function nthPrime($n)
    {
        $j = 0;
        $increment = 2;
        while ($j < $n) {
            if (isPrime($increment)) {
                $j++;

            }
            $increment++;
        }

        return $increment - 1;
    }

    var_dump(nthPrime($n));;
}
