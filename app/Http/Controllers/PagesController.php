<?php

namespace App\Http\Controllers;

use App\Lib\Phone\ISmartphone;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lib\Phone\Smartphone;
class PagesController extends Controller
{
    public function index(){

    }

    public function about(){
        return view('about',['user' => 'David']);
    }

    public function __construct(Smartphone $smartphone){

        $this->_phone = $smartphone;
    }

    public function phone(){
        echo $this->_phone;
    }
}
