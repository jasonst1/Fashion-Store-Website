<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionHeader extends Model
{
    use HasFactory;
    protected $primaryKey = ['TransactionID', 'UserID'];
    public $incrementing = false;
}
