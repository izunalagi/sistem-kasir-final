<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $table = 'buyers';
    // protected $fillable = [
    // 'title',
    // 'description',
    // ];

    protected $guarded = ['id'];
}
