<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    public $primarykey = ['UserID', 'ProductID'];
    public $incrementing = false;

    public function Products()
    {
        return $this->belongsTo(Products::class, 'ProductID', 'ProductID');
    }

    public function Users()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }
}
