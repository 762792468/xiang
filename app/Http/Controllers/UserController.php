<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function add(Request $request)
    {
        return view('user/add');
    }
    //
   public function store(Request $request)
   {
       $name  = $request->input('name');
       $sex  = $request->input('sex');
       $age  = $request->input('age');

       $user = new User();
       $user->name = $name;
       $user->sex = $sex;
       $user->age = $age;
       $user->save();
   }

   public function index(){

        $user = User::query()->find(1);
        $user = User::query()->where('name','2')->first();

        $user->name =3;
        $user->save();
       dd($user);
   }


}

