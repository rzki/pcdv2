<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPerType extends Model
{
    use HasFactory;

    public $table = 'monthly_total_pertype';

    protected $guarded = [];

    public $timestamps = false;
}
