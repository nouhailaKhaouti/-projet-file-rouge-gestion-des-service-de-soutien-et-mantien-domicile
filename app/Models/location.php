<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $fillable = [
        'county',
        'ville',
        'rue',
        'appartement',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
