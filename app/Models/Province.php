<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function peopleInformations()
    {
        return $this->hasMany(PeopleInformation::class, 'province_id');
    }
}
