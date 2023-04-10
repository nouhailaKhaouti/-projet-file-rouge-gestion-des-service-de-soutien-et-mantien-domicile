<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'description',
        'jour',
        'type',
        'city',
        'adresse',
        'status',
        'service_id',
        'provider_id',
        'user_id',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function provider()
    {
        return $this->hasOne(User::class);
    }
    public function service()
    {
        return $this->hasOne(Service::class);
    }
    public function CheckLists()
    {
        return $this->belongsToMany(CheckList::class,'checkLists_demandes', 'demande_id', 'checkList_id');
    }

}
