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

    public function phone(){

    }
}
