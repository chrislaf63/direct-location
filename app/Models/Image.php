<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'source',
        'ad_id',
        'user_id',
];
    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

}
