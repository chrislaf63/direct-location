<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = [
        'user_id',
        'category_id',
        'city_id',
        'title',
        'status',
        'description',
        'excerpt',
        'price',
        'time_unity',
        'picture_1',
        'picture_2',
        'picture_3',
    ];

    public function exists():bool
    {
        return (bool) $this->id;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'ad_user')->withTimestamps();
    }


}
