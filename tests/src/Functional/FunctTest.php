<?php

namespace Drupal\Tests\phpunit_test\Functional;


use Drupal\Tests\BrowserTestBase;

/**
 * Simple test to ensure page exists.
 *
 * @group phpunit_example
 */
class FunctTest extends BrowserTestBase
{

  /**
   * Modules to install.
   *
   * @var array
   */
  public static $modules = array('phpunit_test');

  /**
   * A simple user with 'access content' permission
   */
  private $user;

  /**
   * Perform any initial set up tasks that run before every test method
   */
  public function setUp()
  {
    parent::setUp();
    $this->user = $this->drupalCreateUser(array('access content'));
  }


  public function testCustomPageExists()
  {
    // Login
    $this->drupalLogin($this->user);
    // Test the page is found
    $this->drupalGet('test-page');
    $this->assertResponse(200);

    $this->assertText(sprintf('Hello Snehal.'), 'Correct message is shown.');
  }
}