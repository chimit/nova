<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Room extends Model
{
    use HasFactory, Actionable;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'renovated_at' => 'datetime:Y-m-d H:i:s',
    ];

    /**
     * Get the category that owns the flat.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the building that owns the home.
     */
    public function building()
    {
        return $this->hasOneThrough(Building::class, Category::class, 'id', 'id', 'category_id', 'building_id');
    }
}
