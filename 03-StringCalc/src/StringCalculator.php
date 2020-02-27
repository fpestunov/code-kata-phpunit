<?php

namespace App;

use Exception;

class StringCalculator
{
  /**
   * Add the provided set of numbers.
   *
   * @param  string  $numbers
   * @return int
   *
   * @throws \Exception
   */
  public function add(string $numbers)
  {
    $delimiter = ',';
    // return 0;
    // return (int) $numbers;
    return array_sum(explode($delimiter, $numbers));
  }
}
