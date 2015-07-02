<?php
/**
 * Project: laravel
 * Author: valera
 * Date: 02.07.15
 * Time: 13:24
 */

namespace App\Lib\Phone;


class Processor {
    private $_processorName = '';
    private $_processorCores = 0;

    public function __construct($name, $cores){
        if(is_string($name) && is_int($cores)){
            $this->_processorName = $name;
            $this->$_processorCores = $cores;
        }
    }
    public function __tostring(){
        return $this->_processorName . " " . $this->_processorCores . " cores";
    }
}