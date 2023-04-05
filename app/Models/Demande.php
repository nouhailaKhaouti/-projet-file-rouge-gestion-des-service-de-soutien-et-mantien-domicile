<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'jourdemander',
        'description',
        'status',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }

}
