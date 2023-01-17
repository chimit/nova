<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    /**
     * Get the category for the listing.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the building that owns the listing.
     */
    public function building()
    {
        return $this->hasOneThrough(Building::class, Category::class, 'id', 'id', 'category_id', 'building_id');
    }
}
