<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckList extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'prix',
        'user_id',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function Demandes()
    {
        return $this->belongsToMany(Demande::class,'checkLists_demandes', 'checkList_id', 'demande_id');
    }
    
}
