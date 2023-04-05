<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
    ];
    public function company()
    {
        return $this->hasMany(Company::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
