<?php

namespace Drupal\prueba2_pagina\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\prueba2_pagina\Policeman;

class PolicemanController extends ControllerBase {
  public function view(Policeman $policeman) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello my plate number is: @plate_number', ['@plate_number' => $policeman->getPlateNumber()]),
    ];
  }
}
