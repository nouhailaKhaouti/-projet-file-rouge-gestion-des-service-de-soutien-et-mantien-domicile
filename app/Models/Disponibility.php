<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibility extends Model
{
    use HasFactory;
    protected $fillable = [
        'jour',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
