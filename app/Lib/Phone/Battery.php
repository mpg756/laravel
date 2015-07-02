<?php
/**
 * Project: laravel
 * Author: valera
 * Date: 02.07.15
 * Time: 13:25
 */

namespace App\Lib\Phone;


class Battery {
    private $_capacity = '';

    public function __construct($capacity){
        $this->_capacity = $capacity;
    }
    public function __tostring(){
        return "battery capacity " . $this->_capacity . " mAh";
    }
}