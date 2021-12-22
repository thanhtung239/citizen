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
        'village_id',
        'identification',
        'name',
        'birthday',
        'gender',
        'home_town',
        'resident',
        'religion',
        'edu_level',
        'job',
    ];
}
