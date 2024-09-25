<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'zip_code',
        'departement_id',
        ];

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
