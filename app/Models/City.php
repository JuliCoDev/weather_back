<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;


    protected $primaryKey = 'cities_id';
    protected $fillable = [
        'name',
        'coordinates',
        'markerOffset'
    ];

    protected $casts = [
        'coordinates' => 'array'
    ];

    public function weathers()
    {
        return $this->hasMany(Weather::class, 'cities_id');
    }


}
