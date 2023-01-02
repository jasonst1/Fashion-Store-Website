<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewPhoto extends Model
{
    use HasFactory;
    public $primarykey = ['ReviewID', 'PhotoID'];
    public $incrementing = false;
}
