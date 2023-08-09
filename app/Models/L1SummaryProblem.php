<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class L1SummaryProblem extends Model
{
    use HasFactory;

    public $table = 'report_summaryproblem_l1';

    protected $guarded = [];

    public $timestamps = false;
}
