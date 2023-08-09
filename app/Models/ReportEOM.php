<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportEOM extends Model
{
    use HasFactory;

    public $table = 'report_eom';

    protected $guarded = [];

    public $timestamps = false;
}
