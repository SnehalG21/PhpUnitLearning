<?php

namespace Drupal\Tests\phpunit_test\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\phpunit_test\Unit;

/**
 * Simple test to ensure that asserts pass.
 *
 * @group phpunit_example
 */
class UnitTest extends UnitTestCase {

  protected $unit;

  public function setUp()
  {
    $this->unit = new Unit();
  }

  /**
   * @covers Drupal\phpunit_test\Unit::setLength
   */

  public function testsetLength(){
    $this->assertEquals(0, $this->unit->getLength());
    $this->unit->setLength(8);
    $this->assertEquals(8, $this->unit->getLength());
  }

  /**
   * @covers Drupal\phpunit_test\Unit::getLength
   */

  public function testGetLength() {
    $this->unit->setLength(9);
    $this->assertNotEquals(10, $this->unit->getLength());
  }

  public function tearDown() {
    unset($this->unit);
  }

}
