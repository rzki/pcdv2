<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class L2HourlyRunning extends Model
{
    use HasFactory;

    public $table = 'report_hourlyrunning_l2';

    protected $guarded = [];

    public $timestamps = false;
}
