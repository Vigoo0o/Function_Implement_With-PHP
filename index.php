<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  include './string.php';
  include './array.php';


  if (IsNaN('123456')) {
    echo 'Is Not A Number!';
  } else {
    echo 'Is A Number!';
  }