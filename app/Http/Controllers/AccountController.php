<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return to_route(Auth()->user()->role->name.'.index' );
    }
}
