<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarType extends Model
{
    use HasFactory;

    public $timestamps = false; // Disables timestamp creation

    protected $fillable = ['name'];


    public function cars(): HasMany {
        return $this->hasMany(Car::class, 'car_type_id', 'id');
    }
}