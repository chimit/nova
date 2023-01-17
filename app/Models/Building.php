<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'car_parking' => 'boolean',
        'moto_parking' => 'boolean',
    ];

    /**
     * Get the categories for the building.
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * Get the listings for the building.
     */
    public function listings()
    {
        return $this->hasManyThrough(Listing::class, Category::class);
    }
}
