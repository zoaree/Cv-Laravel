<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skils extends Model
{
    use HasFactory;

    protected $fillable=[
        'skil',
        'percent'
    ];
}
