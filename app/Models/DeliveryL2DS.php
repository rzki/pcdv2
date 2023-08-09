<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryL2DS extends Model
{
    use HasFactory;

    public $table = 'delivery';

    protected $guarded = [];

    public $timestamps = false;
}
