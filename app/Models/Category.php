<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function ads()
    {
        return $this->hasMany(Ads::class);
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
