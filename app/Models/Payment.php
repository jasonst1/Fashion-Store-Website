<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $guarded = [''];

    public function User()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function getRouteKeyName()
    {
        return 'CardNumber';
    }
}
