<?php

class NumberBinary {
    public $number;

    function __construct($number) {
        $this->number = $number;
    }

    function convert() {
        $arr = [];
        while(floor($this->number) > 0) {
            $module = $this->number % 2;
            array_unshift($arr, $module);
            $this->number = $this->number/2;         
        }
        return (int) implode('',$arr);
    }
}

$binary = new NumberBinary(12);
var_dump($binary->convert());
