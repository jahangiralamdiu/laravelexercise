<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/18/14
 * Time: 3:13 PM
 */

class WelcomeTest extends TestCase {

    public function testBasicExample()
    {
        $response = $this->action('GET', 'WelcomeController@index');

        $this->assertEquals('I am Jahangir', $response->getContent());
    }

}
 