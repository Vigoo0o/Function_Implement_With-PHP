<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  include './string.php';
  include './array.php';
  include './clsString.php';


  $str = new clsString('Vigo web School');

  if ($str->IsFirstLetterCapital()) {
    echo 'True';
  } else {
    echo 'False';
  }
