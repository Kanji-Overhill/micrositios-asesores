<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fotos;

class UserController extends Controller
{
    public function getUser($url){
        $user = User::where('url','=',$url)->first();
        $id = $user->id;
        $fotos = User::where('id_user','=',$id)->get();
        return view('',['user'=>$user,'fotos'=>$fotos]);
    }
}
