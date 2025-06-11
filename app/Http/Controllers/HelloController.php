<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function welcome(){
        return view("hello.welcome", [
            "name"=> "Augusto",
            "surname"=> "Pires",
            "job"=> "<b> PHP Developer </b>",
            "hobbies"=> ['books', 'gym'],
            "country" => "br"
        ]);
    }
}
