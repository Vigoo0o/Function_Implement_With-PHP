<?php


  class clsString
  {
    private string $value;

    public function __construct(string $value = '') {
      $this->value = $value;
    }

    public function get() : string {
      return $this->value;
    }

    public function set(string $newValue) : void {
      $this->value = $newValue;
    }

    /**
     * Repeats the string a specified number of times, with optional separation.
     *
     * @param int $rCount The number of times to repeat the string.
     * @param bool $sperated Whether to separate the repeated strings with a separator.
     * @param bool $showEnd Whether to show the separator at the end of the repeated string.
     * @param string $sperator The separator to use between repeated strings.
     * @return string The resulting repeated string.
     */
    public function Repeat($rCount = 2, $sperated = false, $showEnd = true, $sperator = '-') : string {
      $result = '';

      if ($sperated) {
        for ($i = 1; $i <= $rCount; $i++) {
          $result .= $this->value;
          
          if ($i != $rCount) {
            $result .= $sperator;
          }

        }

        if ($showEnd) {
          $result .= $sperator;
        }

      } else {
        for ($i = 1; $i <= $rCount; $i++) {
          $result .= $this->value;
        }
      }

      return $result;
    }

    /**
     * Fills the string with zeros on the left to a specified length.
     *
     * @param int $len The desired length of the string.
     * @param string $fillChar The character to use for filling.
     * @return string The filled string.
     */
    function zFill($len, $fillChar = '0') : string {

      if (strlen($this->value) >= $len) {
        return $this->value;
      }

      $countToFill = $len - strlen($this->value);

      $fillStr = '';
      for ($i = 1; $i <= $countToFill; $i++) {
        $fillStr .= $fillChar;
      }


      return ($fillStr . $this->value);
    }

    /**
     * Reverses the string.
     *
     * @return string The reversed string.
     */
    function Reverce() : string {
      $reversedString = '';

      for ($i = 0; $i < strlen($this->value); $i++) {
        $reversedString = $this->value[$i] . $reversedString;
      }

      return $reversedString;
    }

    /**
     * Converts the string to lowercase.
     *
     * @return string The lowercase string.
     */
    function ToLowerCase() : string {
      $lowered = '';

      foreach (str_split($this->value) as $char) {
        if (ord($char) >= 65 && ord($char) <= 90) {
          $lowered .= chr(ord($char) + 32);
        } else {
          $lowered .= $char;
        }
      }

      return $lowered;
    }

    /**
     * Converts the string to uppercase.
     *
     * @return string The uppercase string.
     */
    function ToUpperCase() : string {
      $uppered = '';

      foreach (str_split($this->value) as $char) {
        if (ord($char) >= 97 && ord($char) <= 122) {
          $uppered .= chr(ord($char) - 32);
        } else {
          $uppered .= $char;
        }
      }

      return $uppered;
    }

    /**
     * Swaps the case of each character in the string.
     *
     * @return string The string with swapped case.
     */
  function SwapCase() : string {
    $swaped = '';

      foreach (str_split($this->value) as $char) {
        if (ord($char) >= 97 && ord($char) <= 122) {
          $swaped .= chr(ord($char) - 32);
        } else {
          $swaped .= chr(ord($char) + 32);
        }
      }

      return $swaped;
    }

    /**
     * Parses the string and converts it to an integer.
     *
     * @return int The parsed integer.
     */
    function ParseInt() : int {
      $result = '';

      foreach (str_split($this->value) as $char) {
        if (ord($char) >= 48 && ord($char) <= 57) {
          $result .= $char;
        }
      }

      return (int)$result;
    }

    /**
   * Trims whitespace from a string.
   *
   * @param string $position The position to trim from ('All', 'Left', 'Right').
   * @param string $char The character to trim.
   * @return string The trimmed string.
   */
    function Trimm($position = 'All', $char = ' ') : string {
      $result = '';
      if ($position == 'All') {
        $countOfFirstChar = 0;
        $countOfLastChar = 0;
        for ($i = 0; $i < strlen($this->value); $i++) {
          if ($this->value[$i] != $char) {
            $countOfFirstChar = $i;
            break;
          }
        }
        for ($i = strlen($this->value) - 1; $i >= 0; $i--) {
          if ($this->value[$i] != $char) {
            $countOfLastChar = $i;
            break;
          }
        }
          $result = substr($this->value, $countOfFirstChar, $countOfLastChar - $countOfFirstChar + 1);
      } elseif ($position == 'Left') {
        for ($i = 0; $i < strlen($this->value); $i++) {
          if ($this->value[$i] != $char) {
            return substr($this->value, $i);
          }
        }
      } elseif ($position == 'Right') {
        for ($i = strlen($this->value) - 1; $i > 0; $i--) {
          if ($this->value[$i] != $char) {
            return substr($this->value, 0, $i + 1);
          }
        }
      }

      return $result;
    }

      /**
   * Checks if a target string exists within another string.
   *
   * @param string $target The string to search for.
   * @return bool True if the target string exists, false otherwise.
   */
    function IfStrExist($target) : bool {
      $result = '';
      $targetCount = 0;
      for ($i = 0; $i < strlen($this->value); $i++) {
        if ($this->value[$i] == $target[$targetCount]) {
          $result .= $this->value[$i];
          $targetCount++;
        }
      }

      return strlen($result) == strlen($target) ? true : false;
    }

    
  /**
   * Extracts a substring from a string.
   *
   * @param int $start The starting position of the substring.
   * @param int $end The ending position of the substring.
   * @param bool $inc_end Whether to include the character at the ending position.
   * @param bool $count_space Whether to count whitespace characters.
   * @return string The extracted substring.
   */
    function SubString($start, $end, $inc_end = true, $count_space = true) : string {
      $result = '';

      if ($start > $end) {
        return 'Range Mistaic!';
      }

      if ($start >= strlen($this->value) || $end >= strlen($this->value)) {
        return 'Out Of Range!';
      }

      for ($i = $start; (($inc_end == true) ? $i <= $end : $i < $end) ; $i++) {

        if (!$count_space && $this->value[$i] == ' ') {
          $end++;
        }

        $result .= $this->value[$i];
        
      }

      return $result;
    }

  /**
   * Checks if a string represents a valid number.
   *
   * @param string $str The string to check.
   * @return bool True if the string is a valid number, false otherwise.
  */
    function IsNaN() : bool {
      foreach (str_split($this->value) as $num) {
        if (ord($num) < 48 || ord($num) > 57)
          return true;
      }

      return false;
    }

    function CleanString($keepNums = true) : string {
      $result = '';

      foreach (str_split($this->value) as $char) {
        // If The Character Is Uppder Case Or Lower Case
        if (ord($char) >= 65 && ord($char) <= 90 || ord($char) >= 97 && ord($char) <= 122) {
          $result .= $char;
        }
        elseif ($keepNums && ord($char) >= 48 && ord($char) <= 57) {
          $result .= $char;
        }
      }

      return $result;
    }

    /**
   * Parses a string into an array of key-value pairs.
   *
   * @return array The parsed array.
   */
    function ParseString() : array {
      $arr = explode('&', $this->value);

      $finResult = [];

      foreach ($arr as $item) {
        $ex = explode('=', $item);
        $finResult+=[$ex[0] => $ex[1]];
      }

      return $finResult;
    }

    /**
   * Counts the number of words in a string.
   *
   * @param string $seperator The separator used to split the string.
   * @return int The number of words in the string.
   */
    function CountWords($seperator = ' ') : int {
      $arr = explode($seperator, $this->value);

      return count($arr);
    }

    function IsFirstLetterCapital() : bool {
      $words = explode(' ', $this->value);

      foreach ($words as $word) {
        if (!(ord($word[0]) >= 65 && ord($word[0])  <= 90)) {
          return false;
        }
      }

      return true;
    }

    function Slice(int $start, $end) : string {
      $result = '';

      for ($i = $start; $i <= $end; $i++) {
        $result .= $this->value[$i];
      }

      return $result;
    }

    function StrStartsWith($target) : bool {
      $arr = explode(' ', $this->value);

      return $arr[0] == $target ? true : false;
    }
  }