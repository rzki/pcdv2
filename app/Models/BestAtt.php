<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestAtt extends Model
{
    use HasFactory;

    protected $table = 'best_attendance';

    protected $guarded = [];

    public $timestamps = false;
}
