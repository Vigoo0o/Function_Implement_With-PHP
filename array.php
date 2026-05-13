<?php

  /**
   * Finds the minimum number in an array.
   *
   * @param array $items The array of numbers to search.
   * @return int The minimum number in the array.
   */
  function MinimumNumber(array $items) : int {
    $result = 0;

    $result = $items[0];

    foreach ($items as $item) {
      if ($item < $result) {
        $result = $item;
      }
    }

    return $result;
  }

  /**
   * Finds the maximum number in an array.
   *
   * @param array $items The array of numbers to search.
   * @return int The maximum number in the array.
   */
  function MaximumNumber(array $items) : int {
    $result = 0;

    $result = $items[0];

    foreach ($items as $item) {
      if ($item > $result) {
        $result = $item;
      }
    }

    return $result;
  }

  /**
   * Calculates the sum of an array of numbers based on the specified operation.
   *
   * @param array $nums The array of numbers to process.
   * @param string $op The operation to perform ('+', '-', '*').
   * @return int The result of the operation.
   */
  function GetSumOfNumbers(array $nums, $op = '+') : int {
    $result = $op == '*' ? 1 : 0;

    foreach ($nums as $num) {

      switch ($op) {
        case '+':
          $result += $num;
          break;
        case '-':
          $result -= $num;
          break;
        case '*':
          $result *= $num;
          break;
      }

    }

    return $result;
  }