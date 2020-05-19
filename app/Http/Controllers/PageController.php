<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function viewlog(){
        return view('blog');
    }

    public function Contactme(){
        return view('Contact');
    }

    public function RegisterUser(){

    }

    public function TestDB($nombre = null){
        $users = ['Pepito1','Pepito2','Pepito3'];
        return view('TestDB',compact('users', 'nombre'));
    }
}
