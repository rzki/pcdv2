<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyTotal extends Model
{
    use HasFactory;

    public $table = 'monthly_total';

    protected $guarded = [];

    public $timestamps = false;
}
