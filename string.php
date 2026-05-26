<?php
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
