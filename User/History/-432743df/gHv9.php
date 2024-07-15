<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTransaction extends Model
{
    use HasFactory;
    protected $table_name = "test_transaction"; 
    protected $fillable = [
        'amount',
        'trxID',
        'reference',
    ];

}
