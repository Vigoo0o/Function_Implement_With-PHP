<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  // include './string.php';
  // include './array.php';
  // include './clsString.php';
  include './classes/clsArray.php';
  include './classes/clsNumber.php';


  $num = new clsNumber(10.5);

  echo $num->Get() . '<br>';
  echo $num->Round();

