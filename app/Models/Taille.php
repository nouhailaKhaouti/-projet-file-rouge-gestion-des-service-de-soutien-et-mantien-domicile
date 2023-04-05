<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taille extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
    ];
    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
