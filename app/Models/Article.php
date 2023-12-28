<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['author'];

    public function comments(){
        return $this->HasMany(Comment::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
    
}
