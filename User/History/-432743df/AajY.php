<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTransaction extends Model
{
    use HasFactory;
    protected $table = "test_transaction"; 
    protected $fillable = [
        'amount',
        'trxID',
        'reference',
    ];

}
