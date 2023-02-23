<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Home extends Model
{
    use HasFactory, Actionable;

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
