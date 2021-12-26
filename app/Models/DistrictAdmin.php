<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PeopleInformation;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DistrictAdmin extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'province_admin_id',
        'employee_number',
        'name',
        'email',
        'password',
        'avatar',
        'phone',
        'birthday'
    ];
    
    public function peopleInformations()
    {
        return $this->hasMany(PeopleInformation::class, 'district_admin_id', 'employee_number');
    }
}
