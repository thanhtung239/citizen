<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ProvinceAdmin extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'central_admin_id',
        'employee_number',
        'name',
        'email',
        'password',
        'avatar',
        'phone',
        'birthday'
    ];
}
