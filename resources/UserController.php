<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser($id){
        // para obtener un registro del modelo User
        return response()->json(new UserResource(User::findOrFail($id)));
    }

    public function getUsers(){
        //para obtener una coleccion del modelo User
        return response()->json(UserResource::collection(User::all()));
    }
}