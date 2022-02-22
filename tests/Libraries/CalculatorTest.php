<?php

namespace Tests\Libraries;

use App\Libraries\Calculator;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @return void
     */
    public function test_result()
    {
        $calculator = new Calculator(10, 15);

        $this->assertEquals(10+15, $calculator->result('+'));
        $this->assertEquals(10-15, $calculator->result('-'));
        $this->assertEquals(10*15, $calculator->result('*'));
        $this->assertEquals(10/15, $calculator->result('/'));
    }

    /**
     * @return void
     */
    public function test_division_by_zero_result()
    {
        $calculator = new Calculator(10, 0);

        $this->expectException('DivisionByZeroError');

        $calculator->result('/');
    }
}
