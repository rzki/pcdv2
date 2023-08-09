<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SOP extends Model
{
    use HasFactory;

    public $table = 'sop_adm';

    protected $guarded = [];

    public $timestamps = false;
}
