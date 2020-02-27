<?php

namespace App;

use Exception;

class StringCalculator
{
  const MAX_NUMBER_ALLOWED = 1000;
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
    // return array_sum(explode($delimiter, $numbers));
    $numbers = explode($delimiter, $numbers);

    $this->disallowNegatives($numbers);

    return array_sum(
      $this->ignoreGreaterThan1000($numbers)
    );
  }


  /**
   * Do not allow any negative numbers.
   *
   * @param  array  $numbers
   * @throws Exception
   */
  protected function disallowNegatives(array $numbers): void
  {
    foreach ($numbers as $number) {
      if ($number < 0) {
        throw new Exception('Negative numbers are disallowed.');
      }
    }
  }


  /**
   * Forget any number that is greater than 1,000.
   *
   * @param  array  $numbers
   * @return array
   */
  protected function ignoreGreaterThan1000(array $numbers): array
  {
    return array_filter(
      $numbers,
      function ($number) {
        return $number <= self::MAX_NUMBER_ALLOWED;
      }
    );
  }
}
