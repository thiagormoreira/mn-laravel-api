<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state_id',
    ];

    protected $appends = ['state'];


    protected $hidden = [
        'created_at',
        'updated_at',
        'state_id',
    ];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function getStateAttribute()
    {
        return $this->state()->first();
    }
}
