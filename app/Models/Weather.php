<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    protected $table = 'weathers';
    protected $fillable = [
        'temp',
        'feels_like',
        'temp_min',
        'temp_max',
        'pressure',
        'humidity',

    ];

    protected $hidden = [
        'updated_at',
        'deleted_at'
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'cities_id');
    }
}
