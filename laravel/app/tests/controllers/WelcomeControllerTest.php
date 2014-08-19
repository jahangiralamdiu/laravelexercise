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
}