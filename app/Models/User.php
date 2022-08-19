<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;

/*
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 */
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
        'lastname',
        'email',
        'login',
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
     * get user role model
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role(){
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    /**
     * Change user avatar
     * @param $img
     * @return void
     */
    public function changeAvatar($img):void{
        if($this->avatar){
            $file = File::where('category', 'avatar')->where('filable_type','App\Models\User')->where('filable_id', $this->id)->first();
            $formatted_src = str_replace('/storage', '', $file->src);
            Storage::disk('public')->delete($formatted_src);
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
     * ?>?>?>?
     * @param $path
     * @return void
     */
    public function noAvatar($path){
        $file = new File();
        $file->src = $path;
        $file->category = 'avatar';
        $file->filable_type = 'App\Models\User';
        $file->filable_id = $this->id;
        $file->save();
    }

    /**
     * Change user banner
     * @param $img
     * @return void
     */
    public function changeBanner($img):void{
        $img_path = $img->store('uploads', 'public');
        if(!$this->banner) {
            $file = new File();
            $file->src = '/storage/'.$img_path;
            $file->category = 'banner';
            $file->filable_type = 'App\Models\User';
            $file->filable_id = $this->id;
            $file->save();
        }else{
            //Удаляем прошлый файл и иеняем src
            $file = File::find($this->banner()->id);
            $formatted_src = str_replace('/storage', '', $file->src);
            Storage::disk('public')->delete($formatted_src);
            $file->src = '/storage/'.$img_path;
            $file->save();
        }
    }

    /**
     * Get user banner model
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function banner(){
        return $this->morphOne(File::class, 'filable')->where('category', 'banner')->limit(1);
    }

    /**
     * Get user avatar model
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function avatar(){
        return $this->morphOne(File::class, 'filable')->where('category', 'avatar')->limit(1);
    }

    public function fio(){
        $name = $this->name;
        $lastname = $this->lastname;
        return $name.' '.$lastname;
    }

    /**
     * Check is user online.
     * @return bool
     */
    public function isOnline(){
        return Cache::has('user-is-online-' . $this->id);
    }
}
