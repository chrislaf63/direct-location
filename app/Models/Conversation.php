<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Conversation extends Model
{

    protected $fillable = ['ad_id'];

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}
