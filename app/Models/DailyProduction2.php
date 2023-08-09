<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyProduction2 extends Model
{
    use HasFactory;

    protected $table = 'dpr_2';

    protected $guarded = [];

    public $timestamps = false;
}
