<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;
    public $primarykey = ['ReviewID'];
    public $incrementing = false;

    protected $guarded = [''];

    public function User()
    {
        $this->belongsTo(User::class, 'UserID');
    }

    public function Products()
    {
        $this->belongsTo(Products::class, 'ProductID', 'ProductID');
    }


    public function getRouteKeyName()
    {
        return 'ReviewID';
    }
}
