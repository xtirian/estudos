<?php

/**
 * @file
 * DisciplinasController.php
 *
 * @category    Controller
 * @package     Academico
 * @author      Matheus <tirianx@yahoo.com>
 * @license     MIT https://opensource.org/licenses/MIT
 * @description Controlador de disciplinas do módulo acadêmico
 * @link        https://test-proj.ddev.site/
 */


namespace Drupal\academico\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DisciplinasController
 *
 * @package Drupal\academico\Controller
 */
class DisciplinasController extends ControllerBase {

  /**
   * Página de listagem de disciplinas.
   *
   * @return array
   *   Render array com a mensagem.
   */
  public function lista() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Lista de Disciplinas será exibida aqui.'),
    ];
  }

}


