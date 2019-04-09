<?php

namespace Drupal\prueba2_pagina\Controller;

use Drupal\user\UserInterface;

use Drupal\Core\Controller\ControllerBase;

class PaginaController extends ControllerBase {

  public function pagina() {
    //Render Array
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello world'),
    ];
  }

  public function holaNombre($name) {
    $a = 0;
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hola @name', ['@name' => $name]),
    ];
  }

  public function holaUser(UserInterface $user) {
    $a = 0;
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello @user', ['@user' => $user->getDisplayName()]),
    ];
   }

   public function holaUsers(UserInterface $user1, UserInterface $user2) {
    $a = 0;
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello @user1 and @user2', [
        '@user1' => $user1->getDisplayName(),
        '@user2' => $user2->getDisplayName(),
        ]),
    ];
   }
}