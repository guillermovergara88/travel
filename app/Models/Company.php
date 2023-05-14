<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'phone',
        'province',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function passengers()
    {
        return $this->hasManyThrough(Passenger::class, User::class);
    }
}
