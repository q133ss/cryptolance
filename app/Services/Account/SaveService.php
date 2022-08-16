<?php
namespace App\Services\Account;
use Illuminate\Http\Request;

class SaveService{
    static function save(Request $request){
        $user = Auth()->user();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->speciality = $request->speciality;
        $user->about = $request->about;
        $user->save();
        if($request->avatar){
            $user->changeAvatar($request->file('avatar'));
        }
        return $user;
    }
}
