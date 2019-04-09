<?php

namespace Drupal\prueba2_pagina\Routing;

use Drupal\Core\ParamConverter\ParamConverterInterface;
use Drupal\prueba2_pagina\Policeman;
use Symfony\Component\Routing\Route;

class PolicemanParamConverter implements ParamConverterInterface {

  public function convert($value, $definition, $name, array $defaults) {
    return new Policeman($value);
  }

  public function applies($definition, $name, Route $route) {
    return !empty($definition['type']) && $definition['type'] == 'policeman';
  }
}
