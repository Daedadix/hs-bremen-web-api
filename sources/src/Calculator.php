<?php
/**
 * Created by PhpStorm.
 * User: Daedadix
 * Date: 3/16/2016
 * Time: 3:40 PM
 */

namespace HsBremen\WebApi;

class Calculator
{
    public function add($a, $b){
        return $a + $b;
    }

    public function substract($a, $b){
        return $a - $b;
    }

    public function multiply($a, $b){
        return $a * $b;
    }

    public function divide($a, $b){
        return $a / $b;
    }

}