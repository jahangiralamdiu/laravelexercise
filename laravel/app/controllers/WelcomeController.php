<?php

class WelcomeController extends \BaseController {

    public function sayhello()
    {
        return View::make('jahangir');
    }

    public function index()
    {
        return 'I am Jahangir';
    }

}