<?php

interface IarrayInterface{


public function getArray();


}

class Test implements IarrayInterface
{




        public function getArray()
        {
            $arr = range(1, 1000);
            shuffle($arr);
            return $arr;

        }
    }


