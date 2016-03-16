<?php
/**
 * Created by PhpStorm.
 * User: Daedadix
 * Date: 3/16/2016
 * Time: 3:37 PM
 */

require_once

$a = $_GET['a'];
$b = $_GET['b'];

$calc = new Calculator();
$result = $calc ->add($a, $b);

?>