<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/19/14
 * Time: 12:00 PM
 */
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