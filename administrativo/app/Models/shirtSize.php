<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shirtSize extends Model
{
    use HasFactory;
    protected $table='shirtsize';
    protected $fillable=[
        'size'
    ];
}
