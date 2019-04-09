<?php

namespace Drupal\prueba2_pagina;

class Policeman {

private $plateNumber;

public function __construct($plate_number) {
  $this->plateNumber = $plate_number;
}

public function getPlateNumber() {
  return $this->plateNumber;
}

}

