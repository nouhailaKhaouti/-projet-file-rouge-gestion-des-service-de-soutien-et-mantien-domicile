<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commenter extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'user_id',
        'post_id',
    ];
    public function replies()
    {
        return $this->hasMany(Commenter::class);
    }
    public function user()
    {
        return $this->hasOne(user::class);
    }
    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
