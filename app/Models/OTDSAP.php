<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTDSAP extends Model
{
    use HasFactory;

    protected $table = 'otd_1';

    protected $guarded = [];

    public $timestamps = false;
}
