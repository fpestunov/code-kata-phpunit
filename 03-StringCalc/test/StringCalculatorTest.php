<?php

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
  /** @test */
  function it_evaluates_an_empty_string_as_0()
  {
    $calculator = new StringCalculator();

    $this->assertSame(0, $calculator->add(''));
  }

  /** @test */
  function it_finds_the_sum_of_a_single_number()
  {
    $calculator = new StringCalculator();

    $this->assertSame(5, $calculator->add('5'));
  }

  /** @test */
  function it_finds_the_sum_of_any_amount_of_numbers()
  {
    $calculator = new StringCalculator();

    $this->assertSame(19, $calculator->add('5,5,5,4'));
  }
}
