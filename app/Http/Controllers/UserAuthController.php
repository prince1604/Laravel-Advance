<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserAuthController extends Controller
{
    function login(Request $Request)
    {
        $user = User::where('email',$Request->email)->first();
        if(!$user || !Hash::check($Request->password,$user->password)){
                return ['result'=>"User not found","Success"=>false];
        }

        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        return ['result'=>$success,'msg'=>"user register successfully"];
    }
    function signUp(Request $Request)
    {
    $input = $Request->all();
    $input['password'] = bcrypt($input['password']); // password encryption
    $user = User::create($input); 
    $success['token'] = $user->createToken('MyApp')->plainTextToken;
    $success['name'] = $user->name;

    return ['result'=>$success,'msg'=>"user register successfully"];
    }
}