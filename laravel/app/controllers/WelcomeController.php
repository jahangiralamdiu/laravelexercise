<?php

class WelcomeController extends \BaseController {

    public function sayhello()
    {
        $data = array(
            'heading' => 'Hello Everyone',
            'body' => 'I am an FTFLEAN'
        );
        return View::make('jahangir', $data);
    }

    public function sayhi()
    {
        $data = array(
            'heading' => 'Hello Everyone',
            'body' => 'I am an FTFLEAN'
        );
        return View::make('student/sayhi', $data);
    }

    public function index()
    {
        return 'I am Jahangir';
    }

}