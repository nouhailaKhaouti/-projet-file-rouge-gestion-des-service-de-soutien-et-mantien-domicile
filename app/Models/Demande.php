<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demande extends Model
{
    use HasFactory;
    use SoftDeletes;
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
        return $this->belongsTo(User::class);
    }
    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function CheckLists()
    {
        return $this->belongsToMany(CheckList::class,'checkLists_demandes', 'demande_id', 'checkList_id');
    }

}
