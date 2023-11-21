<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Stats extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'surname',
        'minutes',
        'goals',
        'assists',
        'canadian',
        'yellows',
        'reds',
    ];
}
