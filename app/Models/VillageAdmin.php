<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillageAdmin extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'district_admin_id',
        'name',
        'email',
        'password',
        'avatar',
        'phone',
        'birthday'
    ];
}