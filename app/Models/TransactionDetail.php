<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $table = 'product_details';
    protected $guarded = ['id'];
    use HasFactory;

    public function fkTransaction()
    {
    return $this->belongsTo(Transaction::class,'transaction_id','id');
    }
}
