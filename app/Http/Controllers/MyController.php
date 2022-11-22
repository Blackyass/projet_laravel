<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        $name="yassir";
        $age=19;
        $tab=array('name' =>"durel", 'age' =>60);
        return view('myview',$tab);
    }
}
