<?php
use Lab\Factorial;

class FactorialTest extends PHPUnit\Framework\TestCase

{
    public function test_fact_zero()
    {
        return $this->assertTrue(Factorial::factNum(0) === 1);
    }

    public function test_fact_one()
    {
        return $this->assertTrue(Factorial::factNum(1) === 1);
    }

    public function test_fact_five()
    {
        return $this->assertTrue(Factorial::factNum(5) === 120);
    }

    public function test_fact_rand()
    {
        $n = rand(4, 8);
        return $this->assertTrue(Factorial::factNum($n) === $n * Factorial::factNum($n - 1));
    }

    public function test_fact_negative_three()
    {
        return $this->assertTrue(Factorial::factNum(-3) === null);
    }

    public function test_fact_float()
    {
        return $this->assertTrue(Factorial::factNum(1.5) === null);
    }

    public function test_fact_boolean()
    {
        return $this->assertTrue(Factorial::factNum(false) === null);
    }

    public function test_fact_string()
    {
        return $this->assertTrue(Factorial::factNum("abc") === null);
    }

}