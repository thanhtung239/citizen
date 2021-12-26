<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = [
        'district_id',
        'name',
    ];

    public function district()
    {
        return $this->belongsTo(District::class, config('vietnam-maps.columns.district_id'), 'id');
    }

    public function peopleInformations()
    {
        return $this->hasMany(PeopleInformation::class, 'ward_id');
    }

    public function wardAdmins()
    {
        return $this->hasOne(WardAdmin::class, 'ward_id');
    }
}
