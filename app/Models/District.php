<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_id',
        'name',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, config('vietnam-maps.columns.province_id'), 'id');
    }

    public function wards()
    {
        return $this->hasMany(Ward::class);
    }

    public function peopleInformations()
    {
        return $this->hasMany(PeopleInformation::class, 'district_id');
    }

    public function getRandomWardAttribute()
    {
        return $this->wards()->inRandomOrder()->limit(1)->first()->id;
    }
}
