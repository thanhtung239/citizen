<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProvinceAdmin;
use App\Models\WardAdmin;
use App\Models\DistrictAdmin;

class PeopleInformation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'province_id',
        'district_id',
        'ward_id',
        'province_admin_id',
        'district_admin_id',
        'ward_admin_id',
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
        'hamlet',
        'job',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function provinceAdmin()
    {
        return $this->belongsTo(ProvinceAdmin::class, 'employee_number');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function districtAdmin()
    {
        return $this->belongsTo(ProvinceAdmin::class, 'employee_number');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }

    public function wardAdmin()
    {
        return $this->belongsTo(ProvinceAdmin::class, 'employee_number');
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

    public function getPeopleResidentAttribute()
    {
        $resident = $this->hamlet . ', ' . $this->ward()->first()->name . ', ' . $this->district()->first()->name . ',' . $this->province()->first()->name . ', ' ;
        return $resident;
    }

    public function getProvinceOfPeopleAttribute()
    {
        $province =  $this->province()->first()->name;
        return $province;
    }

    public function getDistrictOfPeopleAttribute()
    {
        $district =  $this->district()->first()->name;
        return $district;
    }

    public function getWardOfPeopleAttribute()
    {
        $ward =  $this->ward()->first()->name;
        return $ward;
    }
}
