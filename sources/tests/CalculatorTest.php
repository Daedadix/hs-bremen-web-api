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
    /** @var Calculator */
    private $calculator;

    protected function setUp() {
        $this->calculator = new Calculator();
    }

   /**
    * @test
    * @dataProvider provideDataForAdd
    */
    public function add($expected, $a, $b)
    {
        $this->assertEquals($expected, $this->calculator->add($a,$b));
    }

    public function provideDataForAdd()
    {
        return [
          'five' => [5,3,2],
          'four' => [4,2,2],
          'two'  => [2,1,1],
        ];
    }

    /**
     * @test
     * @@dataProvider provideDataForSubstract
     */
    public function substract($expected, $a, $b)
    {
        $this->assertEquals($expected, $this->calculator->substract($a,$b));
    }

    public function provideDataForSubstract()
    {
        return [
            'one'  => [1,3,2],
            'null' => [0,2,2],
            'two'  => [2,3,1],
        ];
    }

    /**
     * @test
     * @@dataProvider provideDataForMultiply
     */
    public function multiply($expected, $a, $b)
    {
        $this->assertEquals($expected, $this->calculator->multiply($a,$b));
    }

    public function provideDataForMultiply()
    {
        return [
            'six'  => [6,3,2],
            'four' => [4,2,2],
            'one'  => [1,1,1],
        ];
    }

    /**
     * @test
     * @@dataProvider provideDataForDivide
     */
    public function divide($expected, $a, $b)
    {
        $this->assertEquals($expected, $this->calculator->divide($a,$b));
    }

    public function provideDataForDivide()
    {
        return [
            'two'  => [2,4,2],
            'one'  => [1,2,2],
            'four' => [4,8,2],
        ];
    }
}
