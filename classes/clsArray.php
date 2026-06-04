<?php

class clsArray {
  private array $container = [];

  public function __construct(array $initData = []) {
    $this->container = $initData;
  }

  /**
   * Displays all items in the array
   */
  function DisplayItems() : void {
    echo '<pre>';
      print_r($this->container);
    echo '</pre>';
  }

  /**
   * Finds the minimum number in the array
   * @return int The minimum number
   */
  function MinimumNumber() : int {
    $result = 0;

    $result = $this->container[0];

    foreach ($this->container as $item) {
      if ($item < $result) {
        $result = $item;
      }
    }

    return $result;
  }

  /**
   * Finds the maximum number in the array
   * @return int The maximum number
   */
  function MaximumNumber() : int {
    $result = 0;

    $result = $this->container[0];

    foreach ($this->container as $item) {
      if ($item > $result) {
        $result = $item;
      }
    }

    return $result;
  }

  /**
   * Calculates the sum of all numbers in the array
   * @param string $op The operation to perform ('+', '-', '*')
   * @return int The result of the operation
   */
    function GetSumOfNumbers($op = '+') : int {
    $result = $op == '*' ? 1 : 0;

    foreach ($this->container as $num) {

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

  /**
   * Checks if a value is in the array
   * @param mixed $target The value to search for
   * @return bool True if the value is found, false otherwise
   */
  function IsInArray($target) : bool {
    $result = false;
    foreach ($this->container as $itme) {
      if ($itme == $target) return true;
    }

    return $result;
  }
}