<?php
/**
 * Project: laravel
 * Author: valera
 * Date: 02.07.15
 * Time: 13:25
 */

namespace App\Lib\Phone;


class Camera {
    private $_resolution = 0;

    public function __construct($resolution = 5){
        if(is_int($resolution))
        {
            $this->_resolution = $resolution;
        }
    }
    public function __tostring(){
        return $this->_resolution . " MPx camera";
    }
}