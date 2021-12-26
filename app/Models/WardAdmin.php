<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Ward;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\PeopleInformation;

class WardAdmin extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'district_admin_id',
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
        return $this->hasMany(PeopleInformation::class, 'ward_admin_id', 'employee_number');
    }
}
