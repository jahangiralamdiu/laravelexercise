<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/19/14
 * Time: 12:00 PM
 */

use Way\Tests\Should;
use WelcomeController;

class WelcomeControllerTest extends TestCase {

    public function testLoadingWelcomeSayHello()
    {
        $this->call('GET', 'welcome/sayhello');
        $this->assertResponseOk();
    }

    public function testhellojahangirContent()
    {
        $response = $this->call('GET', 'hellojahangir');
        $this->assertEquals('Hello World', $response->getContent());
    }

    public function testInstanceOf()
    {
        $user = new User();
        $this->assertInstanceOf('User', $user->getUserOne());
    }

    public function testDevMaster()
    {
        Should::equal(4, 2 + 2);
    }
}

class User {

    public $userOne;

    public function __construct()
    {

        $this->userOne = $this;
    }

    /**
     * @return mixed
     */
    public function getUserOne()
    {
        return $this->userOne;
    }


}