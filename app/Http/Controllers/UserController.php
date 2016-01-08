<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index() {
        $data = [];
        $data['message'] = "Sucess";
        return view('login.login',$data);
    }
}
