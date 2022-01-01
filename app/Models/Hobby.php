<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];
}
