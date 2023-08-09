<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTDKAP extends Model
{
    use HasFactory;

    protected $table = 'otd_2';

    protected $guarded = [];

    public $timestamps = false;
}

