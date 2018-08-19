<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function registerForm() {
    	return view('user.register');
    }

    public function register(\App\Http\Requests\UserRegistrationRequest $request) {
        print_r($request->all());
       echo 'successfully enterend';
    }

    /*public function create() {
    	
    	return view('user.create');
    }

    public function store(Request $request) {

    	$validator = \Validator::make($request->all(), [
            'footballername' => 'required',
            'club' => 'required',
            'country' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        return response()->json(['success'=>'Record is successfully added']);
    }*/
}
