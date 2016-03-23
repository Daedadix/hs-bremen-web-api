<?php
/**
 * Created by PhpStorm.
 * User: Daedadix
 * Date: 3/23/2016
 * Time: 4:44 PM
 */

namespace HsBremen\WebApi\Tests;


use HsBremen\WebApi\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
   /**
    * @test
    * @dataProvider provideDataForAdd
    */
    public function add($expected, $a, $b)
    {
        $calculator = new calculator();
        $this->assertEquals($expected, $calculator->add($a,$b));
    }

    public function provideDataForAdd()
    {
        return [
          'five' => [5,3,2],
          'four' => [4,2,2],
          'two'  => [2,1,1],
        ];
    }
}
