<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Team extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'birth',
        'growth',
        'number',
        'position',
    ];
}
