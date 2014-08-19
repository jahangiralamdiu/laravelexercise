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
}