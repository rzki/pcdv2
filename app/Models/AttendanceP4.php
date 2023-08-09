<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceP4 extends Model
{
    use HasFactory;

    public $table = 'attendance-p4';

    protected $guarded = [];

    public $timestamps = false;
}
