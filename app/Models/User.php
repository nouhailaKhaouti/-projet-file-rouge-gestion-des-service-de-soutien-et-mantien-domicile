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
        return $this->hasOne(Service::class);
    }
    public function upgrade()
    {
        return $this->hasOne(Upgrade::class);
    }
    public function demande()
    {
        return $this->hasMany(Demande::class);
    }
    public function disponibility()
    {
        return $this->hasOne(Disponibility::class);
    }
    public function checklist()
    {
        return $this->hasOne(CheckList::class);
    }
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
    public function posts()
    {
        return $this->hasMany(Service::class);
    }
    public function comments()
    {
        return $this->hasMany(Service::class);
    }
    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
