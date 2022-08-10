<?php
namespace App\Services\Account;
use Illuminate\Http\Request;

class SaveService{
    static function save(Request $request){
        $user = Auth()->user();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->about = $request->about;
        $user->save();
        if($request->avatar){
            $user->changeAvatar($request->avatar);
        }
        return $user;
    }
}
