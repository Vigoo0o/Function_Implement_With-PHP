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
