<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestSS extends Model
{
    use HasFactory;

    protected $table = 'best_ss';
    
    protected $guarded = [];

    public $timestamps = false;
}
