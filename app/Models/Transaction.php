<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    // protected $fillable = [
    // 'title',
    // 'description',
    // ];

    protected $guarded = ['id'];

    public function buyers()
    {   
        return $this->hasMany('App\Buyer');
    }
}
