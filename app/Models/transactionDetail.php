<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionDetail extends Model
{
    use HasFactory;
    public $primarykey = ['TransactionID', 'ProductID'];
    public $incrementing = false;
}
