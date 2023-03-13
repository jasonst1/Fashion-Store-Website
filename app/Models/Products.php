<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $guarded = [''];

    public function Categories()
    {
        return $this->belongsTo(Categories::class, 'CategoryID', 'CategoryID');
    }

    public function Wishlist()
    {
        return $this->hasMany(Wishlist::class, 'ProductID', 'ProductID');
    }

    public function ProductPhotos()
    {
        return $this->hasMany(ProductPhotos::class, 'ProductID', 'ProductID');
    }

    public function Review()
    {
        return $this->hasMany(Review::class, 'ProductID', 'ProductID');
    }

    public function getRouteKeyName()
    {
        return 'ProductID';
    }
}
