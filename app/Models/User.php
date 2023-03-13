<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    //id seharusnya guarded ?
    protected $fillable = [
        'id',
        'Username',
        'Email',
        'Password',
    ];
    // field mana aja yang boleh diisi
    // sisanya diisi otomatis

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

    public function getAuthPassword()
    {
        return $this->Password;
    }

    public function Address()
    {
        return $this->hasMany(Address::class, 'UserID');
    }

    public function Payment()
    {
        return $this->hasMany(Payment::class, 'UserID');
    }

    public function Review()
    {
        return $this->hasMany(Review::class, 'UserID');
    }
}
