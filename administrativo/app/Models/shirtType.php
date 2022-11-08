<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shirtType extends Model
{
    use HasFactory;
    protected $table='shirttype';
    protected $fillable=[
        'type'
    ];
}
