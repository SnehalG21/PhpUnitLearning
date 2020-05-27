<?php

namespace Drupal\Tests\phpunit_test\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\Core\Url;

/**
 * Simple test to ensure page exists.
 *
 * @group phpunit_test
 */
class FunctTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * Modules to install.
   *
   * @var array
   */
  public static $modules = ['phpunit_test'];

  /**
   * A simple user with 'access content' permission.
   */
  protected $user;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
  }

  /**
   * Test method to check page and content.
   */
  public function testCustomPageExists() {
    $this->user = $this->drupalCreateUser(['access content']);
    // Login.
    $this->drupalLogin($this->user);
    // Test the page is found.
    $test_path = Url::fromRoute('test.test');
    $this->drupalGet($test_path);
    // $this->getSession()->getPage()->getContent();
    $this->assertResponse(200);

     $this->assertText('Hello Snehal.', 'Correct message is shown.');
  }

}
