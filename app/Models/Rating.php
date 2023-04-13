<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'number',
        'description',
        'user_id',
        'publisher_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
