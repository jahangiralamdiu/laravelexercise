<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/20/14
 * Time: 2:45 PM
 */

class Jahangir {

    public $jahangir;

    public function __construct()
    {
       $this->jahangir=$this;
    }

    /**
     * @return \Jahangir
     */
    public function getJahangir()
    {
        return $this->jahangir;
    }



} 