<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'district_id',
        'village_admin_id',
        'name',
    ];
}
