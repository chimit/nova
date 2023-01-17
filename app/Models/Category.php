<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Get the building that owns the category.
     */
    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    /**
     * Get the listing associated with the category.
     */
    public function listing()
    {
        return $this->hasOne(Listing::class);
    }
}
