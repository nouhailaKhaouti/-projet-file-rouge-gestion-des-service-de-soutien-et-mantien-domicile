<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commenter extends Model
{
    use HasFactory;
    use SoftDeletes;
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
        return $this->belongsTo(user::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
