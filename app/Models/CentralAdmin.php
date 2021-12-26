<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CentralAdmin extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    const APPROVED = 1;
    const NOT_APPROVED = 0;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'phone',
        'birthday'
    ];
}
