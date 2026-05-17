<?php

/**
 * Repeats a string a specified number of times, with optional separation.
 *
 * @param string $str The string to repeat.
 * @param int $rCount The number of times to repeat the string.
 * @param bool $sperated Whether to separate each repeated string with a separator.
 * @param bool $showEnd Whether to show the separator at the end.
 * @param string $sperator The separator to use.
 * @return string The repeated string.
 */
  function StringRepeat($str, $rCount = 2, $sperated = false, $showEnd = true, $sperator = '-') : string {
    $result = '';

    if ($sperated) {
      for ($i = 1; $i <= $rCount; $i++) {
        $result .= $str;
        
        if ($i != $rCount) {
          $result .= $sperator;
        }

      }

      if ($showEnd) {
        $result .= $sperator;
      }

    } else {
      for ($i = 1; $i <= $rCount; $i++) {
        $result .= $str;
      }
    }

    return $result;
  }


  /**
   * Fills a string with zeros on the left to a specified length.
   *
   * @param string $str The string to fill.
   * @param int $len The desired length of the string.
   * @return string The filled string.
   */
  function zFill($str, $len, $fillChar = '0') : string {

    if (strlen($str) >= $len) {
      return $str;
    }

    $countToFill = $len - strlen($str);

    $fillStr = '';
    for ($i = 1; $i <= $countToFill; $i++) {
      $fillStr .= $fillChar;
    }


    return ($fillStr . $str);
  }


  /**
   * Reverses a string.
   *
   * @param string $str The string to reverse.
   * @return string The reversed string.
   */
  function StringReverce($str) : string {
    $reversedString = '';

    for ($i = 0; $i < strlen($str); $i++) {
      $reversedString = $str[$i] . $reversedString;
    }

    return $reversedString;
  }



  /**
   * Generates letters with their ASCII codes.
   *
   * @param string $from The starting letter.
   * @param string $to The ending letter.
   * @return void
   */
  function GenerateLattersWithASCIICode($from = 'A', $to = 'Z') : void {
  for ($i = ord($from); $i <= ord($to); $i++) {
    echo chr($i) . ' | ' . $i . '<br>';
  }
  }

  /**
   * Converts a string to lowercase.
   *
   * @param string $str The string to convert.
   * @return string The lowercase string.
   */
  function StrToLowerCase($str) : string {
    $lowered = '';

    foreach (str_split($str) as $char) {
      if (ord($char) >= 65 && ord($char) <= 90) {
        $lowered .= chr(ord($char) + 32);
      } else {
        $lowered .= $char;
      }
    }

    return $lowered;
  } 


    /**
     * Converts a string to uppercase.
     *
     * @param string $str The string to convert.
     * @return string The uppercase string.
     */
    function StrToUpperCase($str) : string {
    $uppered = '';

    foreach (str_split($str) as $char) {
      if (ord($char) >= 97 && ord($char) <= 122) {
        $uppered .= chr(ord($char) - 32);
      } else {
        $uppered .= $char;
      }
    }

    return $uppered;
  }

  /**
   * Swaps the case of a string.
   *
   * @param string $str The string to swap case.
   * @return string The string with swapped case.
   */
  function SwapCase($str) {
  $swaped = '';

    foreach (str_split($str) as $char) {
      if (ord($char) >= 97 && ord($char) <= 122) {
        $swaped .= chr(ord($char) - 32);
      } else {
        $swaped .= chr(ord($char) + 32);
      }
    }

    return $swaped;
  }