<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    public $primarykey = ['UserID', 'ProductID'];
    public $incrementing = false;

    protected $guarded = [''];

    public function Product()
    {
        return $this->belongsTo(Products::class, 'ProductID', 'ProductID');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function getRouteKeyName()
    {
        return 'ProductID';
    }
}
