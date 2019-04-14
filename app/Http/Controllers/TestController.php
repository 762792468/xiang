<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $name = 'zhangsan';
        $age  = '1122';
        $data['name']=$name;
        $data['age']=$age;
        return view('back/user',$data);


    }

}
