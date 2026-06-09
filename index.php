<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  // include './string.php';
  // include './array.php';
  // include './clsString.php';
  include './classes/clsArray.php';
  include './classes/clsNumber.php';


  $cars = ['BMW', 'FIAT', 'MIRCEDES', 'KIA'];

  echo clsArray::Join($cars, '|');


