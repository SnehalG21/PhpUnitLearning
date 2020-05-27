<?php

namespace Drupal\phpunit_test\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 *
 */
class PhpController extends ControllerBase {

  /**
   * Generates an test page.
   */
  public function test() {
    return [
      '#markup' => t('Hello Snehal.'),
    ];
  }

}
