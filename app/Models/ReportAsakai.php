<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportAsakai extends Model
{
    use HasFactory;

    public $table = 'report_asakai';

    protected $guarded = [];

    public $timestamps = false;
}
