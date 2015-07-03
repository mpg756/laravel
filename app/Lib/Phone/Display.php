<?php
/**
 * Project: laravel
 * Author: valera
 * Date: 02.07.15
 * Time: 13:25
 */

namespace App\Lib\Phone;


class Display {
    private $_resolution = '';

    public function __construct($resolution = '800x600'){
        $this->_resolution = $resolution;
    }

    public function __tostring(){
        return $this->_resolution . " display";
    }
}