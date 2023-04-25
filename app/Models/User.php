<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'icon',
        'adresse',
        'city',
        'country',
        'icon',
        'service_id',
        'access',
        'postal_code',
        'phone',
        'warning',
        'Description',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function upgrade()
    {
        return $this->belongsTo(Upgrade::class);
    }
    public function demande()
    {
        return $this->hasMany(Demande::class);
    }
    public function disponibility()
    {
        return $this->hasMany(Disponibility::class);
    }
    public function checkLists()
    {
        return $this->hasMany(CheckList::class);
    }
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
    public function comments()
    {
        return $this->hasMany(Commenter::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function cities()
    {
        return $this->belongsToMany(City::class,'cities_users', 'user_id', 'city_id');
    }
}
