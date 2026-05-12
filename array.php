<?php

  function MinimumNumber(array $items) : int {
    $result = 0;

    $result = $items[0];

    foreach ($items as $item) {
      if ($item < $result) {
        $result = $item;
      }
    }

    return $result;
  }

    function MaximumNumber(array $items) : int {
    $result = 0;

    $result = $items[0];

    foreach ($items as $item) {
      if ($item > $result) {
        $result = $item;
      }
    }

    return $result;
  }