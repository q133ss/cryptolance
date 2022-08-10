<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountController\SaveRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Services\Account\SaveService;

class AccountController extends Controller
{
    public function index(){
        return view('account.index' );
    }

    public function settings(){
        $user = Auth()->user();
        return view('account.settings', compact('user'));
    }

    /**
     * @param Request $request
     * @return void
     */
    public function save(SaveRequest $request){
        SaveService::save($request->validated());
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
