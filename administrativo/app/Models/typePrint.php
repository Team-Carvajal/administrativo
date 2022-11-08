<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typePrint extends Model
{
    use HasFactory;
    protected $table='typeprint';
    protected $fillable=[
        'typePrint'
    ];
}
