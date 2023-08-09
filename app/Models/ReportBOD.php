<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportBOD extends Model
{
    use HasFactory;

    public $table = 'report_bod';

    protected $guarded = [];

    public $timestamps = false;
}
