<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportDelayUnit extends Model
{
    use HasFactory;

    public $table = 'report_delay_unit';

    protected $guarded = [];

    public $timestamps = false;
}
