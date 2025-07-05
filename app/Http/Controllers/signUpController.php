<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class signUpController extends Controller
{
    public function create(){
        return view("auth.signup");
    }
}
