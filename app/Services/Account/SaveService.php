<?php
namespace App\Services\Account;
use Illuminate\Http\Request;

class SaveService{
    static function save(Request $request){
        $user = Auth()->user();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->login = $request->login;
        $user->speciality = $request->speciality;
        $user->about = $request->about;
        $user->save();
        if($request->hasFile('avatar')){
            $user->changeAvatar($request->file('avatar'));
        }
        if($request->hasFile('banner')){
            $user->changeBanner($request->file('banner'));
        }
        return $user;
    }
}
