<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUsers',
        'createdUsers_at',
        'subTotal',
        'users_id',
        'created_at',
        'updated_at',
        '',
    ];
    
}
