<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'adress',
        'phone',
        'description',
        'published_at'
    ];

    //Cria um relacionamento do modelo Car com o modelo CarFeatures
    public function features(): HasOne
    {
        return $this->hasOne(CarFeatures::class, 'car_id');
    }

    //Cria um relacionamento do modelo Car com a imagem primária do modelo CarFeature 
    public function primaryImage(): HasOne
    {
        return $this->hasOne(CarImage::class, 'car_id')
        ->oldestOfMany('position');
    }

    //Cria um relacionamento do modelo Car com todas as imagens do modelo CarFeatures
    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class, 'car_id');
    }

    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class, 'car_id');
    }
}
