<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  include './string.php';
  include './array.php';
  include './clsString.php';


  $str = new clsString('name=vigo&age=40&country=Egypt');

  echo '<pre>';
    print_r($str->ParseString());
  echo '</pre>';
