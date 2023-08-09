<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyProduction extends Model
{
    use HasFactory;

    protected $table = 'dpr_1';

    protected $guarded = [];

    public $timestamps = false;
}
