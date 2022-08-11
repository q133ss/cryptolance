<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role(){
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    /**
     * @param $img
     * @return void
     */
    public function changeAvatar($img):void{
        if($this->avatar){
            $file = File::where('category', 'avatar')->where('filable_type','App\Models\User')->where('filable_id', $this->id)->first();
            $img_path = $img->store('uploads', 'public');
            $file->src = '/storage/'.$img_path;
            $file->save();
        }else{
            $file = new File();
            $img_path = $img->store('uploads', 'public');
            $file->src = '/storage/'.$img_path;
            $file->category = 'avatar';
            $file->filable_type = 'App\Models\User';
            $file->filable_id = $this->id;
            $file->save();
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function avatar(){
        return $this->morphOne(File::class, 'filable')->where('category', 'avatar')->limit(1);
    }
}
