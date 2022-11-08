<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $table='products';
    protected $fillable =[
        'nameProduct',
        'descriptionProduct',
        'price',
        'image',
        'QuantityAvailable',
        'garanty',
        'shirtColors_idShirtColor',
        'shirtSize_idShirtSize',
        'shirtType_idShirtType',
        'typePrint_idTypePrint',
        'descountSettings_id',
        'category_idCategory'
    ];
    protected $primaryKey='idproduct';
    protected $keyType='integer';
    public $timestamps=false;
}
