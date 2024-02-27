<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'zip',
        'number',
        'complement',
        'city_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'city_id',
    ];

    protected $appends = ['city'];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function getCityAttribute()
    {
        return $this->city()->first();
    }
}
