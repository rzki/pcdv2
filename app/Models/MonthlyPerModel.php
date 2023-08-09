<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPerModel extends Model
{
    use HasFactory;

    public $table = 'monthly_total_permodel';

    protected $guarded = [];

    public $timestamps = false;
}
