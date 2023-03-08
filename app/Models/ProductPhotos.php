<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPhotos extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $guarded = [''];

    public function Products()
    {
        return $this->belongsTo(Products::class, 'ProductID', 'ProductID');
    }
}
