<?php
/**
 * Project: laravel
 * Author: valera
 * Date: 02.07.15
 * Time: 10:48
 */

namespace App\Lib\Phone;


class Smartphone implements ISmartphone{
    protected $_name;
    protected $_processor;
    protected $_display;
    protected $_camera;
    protected $_battery;

    public function __construct($name = "Iphone",  $processor = "Intel Atom",  $display = "800x600",  $camera = 5,  $battery = 2500){
        $this->_name = $name;
        $this->_processor = new Processor($processor);
        $this->_display = new Display($display);
        $this->_camera = new Camera($camera);
        $this->_battery = new Battery($battery);
    }

    public function __tostring(){
        return $this->_name . ", " . $this->_processor . ", " . $this->_display . ", " . $this->_camera . ", " . $this->_battery;
    }


}