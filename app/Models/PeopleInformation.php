<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeopleInformation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'province_id',
        'district_id',
        'ward_id',
        'identification',
        'name',
        'hamlet',
        'province_admin_id',
        'district_admin_id',
        'ward_admin_id',
        'birthday',
        'gender',
        'home_town',
        'resident',
        'religion',
        'edu_level',
        'job',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }

    public function getNameProvinceAttribute()
    {
        return $this->province->name->first();
    }

    public function scopeSearch($query, $request)
    {
        if (isset($request['search_by_cmnd'])) {
            $query->where('identification', 'LIKE', '%' . $request['search_by_cmnd'] . '%');
        }

        if (isset($request['search_by_name'])) {
            $query->where('name', 'LIKE', '%' . $request['search_by_name'] . '%');
        }

        return $query;
    }
}
