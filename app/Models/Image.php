<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\PostDec;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
    ];
    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
