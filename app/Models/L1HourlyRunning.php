<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class L1HourlyRunning extends Model
{
    use HasFactory;

    public $table = 'report_hourlyrunning_l1';

    protected $guarded = [];

    public $timestamps = false;
}
