<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'company_id',
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

    /**
     * Get the company associated with the user.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the passengers associated with the user.
     */
    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }

    /**
     * Get the locations associated with the user.
     */
    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    /**
     * Get the users associated with the admin's company.
     */
    public function companyUsers()
    {
        return $this->hasMany(User::class, 'company_id', 'company_id');
    }

    /**
     * Get the role associated with the user.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Check if user is Admin
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->getRole() === 'admin';
    }

    /**
     * Check if user is SuperAdmin
     *
     * @return bool
     */
    public function isSuperAdmin()
    {
        return $this->getRole() === 'superadmin';
    }
}