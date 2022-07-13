<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content','category_id', 'price', 'currency', 'type_id', 'language_id', 'time'];

    public function tags(){
        return $this->belongsToMany(Tags::class, 'tags_to_projects', 'project_id', 'tag_id');
    }

    public function type(){
        return $this->hasOne(Type::class, 'id', 'type_id');
    }
}
