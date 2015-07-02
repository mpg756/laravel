<?php
/**
 * Project: laravel
 * Author: valera
 * Date: 02.07.15
 * Time: 10:48
 */

namespace App\Lib\Phone;


class Smartphone {
    protected $_name = '';
    protected $_processor;
    protected $_display;
    protected $_camera;
    protected $_battery;

    public function __construct($name, Processor $processor, Display $display, Camera $camera, Battery $battery){
        if(is_string($name)){
            $this->_name;
        }
        $this->_processor = $processor;
        $this->_display = $display;
        $this->_camera = $camera;
        $this->_battery = $battery;
    }

    public function __tostring(){
        return $this->_name . ", " . $this->_processor . ", " . $this->_display . ", " . $this->_camera . ", " . $this->_battery;
    }

}