<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index_user(){
        return view('');
    }

    public function create_user(){
        return view('user.create');
    }
}
