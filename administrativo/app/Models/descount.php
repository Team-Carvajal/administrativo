<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class descount extends Model
{
    use HasFactory;
    protected $table='descountsettings';
    protected $fillable=[
        'descriptionDescount',
        'descount',
        'applyDate'
    ];
}
