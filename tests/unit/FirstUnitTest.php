<?php namespace App\Tests;

class FirstUnitTest extends \Codeception\Test\Unit
{
    public function testOnePlusOneEqualsTwo()
    {
// Arrange
        $num1 = 1;
        $num2 = 1;
        $expectedResult = 2;
// Act
        $result = $num1 + $num2;
// Assert
        $this->assertEquals($expectedResult, $result);
    }
}