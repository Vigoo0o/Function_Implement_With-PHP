<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  // include './string.php';
  // include './array.php';
  // include './clsString.php';
  include './classes/clsArray.php';


  $arr = new clsArray([1,2,3,4,-5]);


  $arr->DisplayItems();
  echo $arr->MinimumNumber() . '<br>';
  echo $arr->MaximumNumber() . '<br>';
  echo $arr->GetSumOfNumbers() . '<br>';

  if ($arr->IsInArray(7)) {
    echo 'True';
  } else {
    echo 'False';
  }

