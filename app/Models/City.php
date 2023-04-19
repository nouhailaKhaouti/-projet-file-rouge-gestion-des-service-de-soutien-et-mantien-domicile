<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class,'cities_users', 'user_id', 'city_id');
    }
}
