<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    public function __construct(){

    }
    public function login()
    {
        echo "Success";die();
    }
}