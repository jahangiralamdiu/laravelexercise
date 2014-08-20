<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/19/14
 * Time: 12:00 PM
 */

use Way\Tests\Should;


class WelcomeControllerTest extends TestCase {

    public function testLoadingWelcomeSayHello()
    {
        $this->call('GET', 'welcome/sayhello');
        $this->assertResponseOk();
    }

    public function testAdd()
    {
       $welcome = new AssertionTestController();
        $this->assertEquals(15, $welcome->add(10,5));

    }

    public function testSubtract()
    {
        $welcome = new AssertionTestController();
        $this->assertEquals(12, $welcome->subtract(20, 8));

    }

    public function testhellojahangirContent()
    {
        $response = $this->call('GET', 'hellojahangir');
        $this->assertEquals('Hello World', $response->getContent());
    }

    public function testTwoValueisofSameTypeandValue()
    {
        $val = 0;
        $this->assertSame(0, $val);
    }

    public function testArrayHasaKey()
    {
        $this->assertArrayHasKey('name', array('name'=>'Jahangir'));
    }

    public function testNameArrayHasSpecificName()
    {
        $name = ['Hamid', 'Rasel', 'Bullet', 'Jahangir'];
        $this->assertContains('Jahangir', $name);
        $this->assertNotContains('Tanjim', $name);
    }

    public function testInternalTypeofVariable()
    {
        $student = ['name'=>'Jahangir', 'Track'=>'Laravel'];
        $this->assertInternalType('string', $student['name']);
    }

    public function testInstanceOf()
    {
        $user = new Jahangir();
        $this->assertInstanceOf('Jahangir', $user->getJahangir());
    }

    public function testDevMaster()
    {
        Should::equal(4, 2 + 2);
    }
}

