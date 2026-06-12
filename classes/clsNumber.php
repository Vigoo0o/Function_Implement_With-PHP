<?php

  class clsNumber {
    private float $value;

    public function __construct(float $initValue = 0) {
      $this->value = $initValue;
    }

    function Get() : float {
      return $this->value;
    }

    function Set(float $newValue) {
      $this->value = $newValue;
    }

    function Floor() : int {
      return (int)($this->value);
    }

    function Ceil() : int {
      return $this->value > (int)($this->value) ? (int)($this->value) + 1 : (int)($this->value);
    }

    function Round() : int {
      return $this->value >= (int)($this->value) + 0.5 ? (int)($this->value) + 1 : (int)($this->value);
    }

  }