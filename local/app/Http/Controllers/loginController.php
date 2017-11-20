<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Parent_;

class loginController extends Controller
{
    //
    public function login(Request $request){
     //   dd($request);
        if(Auth::attempt(['email' => $request->input('username') , 'password' => $request->input('password')])){
            $user = Auth::user();
            $user['token']=  $user->createToken('mHealth')->accessToken;

            return Controller::success("User Has been Login successfully"   ,'user' ,$user );
        }
        return Controller::filed("user name or password is wrong"   ,401 );


    }



}
