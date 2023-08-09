<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeListPCD extends Model
{
    use HasFactory;

    protected $table = 'employee_list';

    protected $guarded = [];

    public $timestamps = false;
}
