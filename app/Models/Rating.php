<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'description',
        'user_id',
        'publisher_id',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
