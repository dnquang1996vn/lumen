<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Strain extends Model
{
    protected $fillable = [
        'name', 'code_tag',
    ];
}
