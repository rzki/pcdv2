<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyPlanningDelivery extends Model
{
    use HasFactory;

    protected $table = 'daily_planning_delivery';

    protected $guarded = [];

    public $timestamps = false;
}
