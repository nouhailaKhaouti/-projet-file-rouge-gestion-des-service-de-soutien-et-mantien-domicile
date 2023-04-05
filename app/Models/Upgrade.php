<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upgrade extends Model
{
    use HasFactory;
    protected $fillable = [
        'cin',
        'cin_file',
        'certificat',
        'status',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
