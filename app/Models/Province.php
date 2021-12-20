<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'province_admin_id',
        'name',
    ];
}
