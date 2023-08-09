<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssyL2NS extends Model
{
    use HasFactory;

    public $table = 'assy';

    protected $guarded = [];

    public $timestamps = false;
}
