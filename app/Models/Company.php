<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Locale;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nemploi',
        'commercialRegisterN',
        'status',
        'webSite',
        'icon',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function locations()
    {
        return $this->hasMany(location::class);
    }
    public function telephones()
    {
        return $this->hasMany(Telephone::class);
    }
    public function service()
    {
        return $this->hasOne(Service::class);
    }
}
