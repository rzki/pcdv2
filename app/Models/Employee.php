<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'image',
        'npk',
        'position',
        'section',
        'shift',
    ];

    protected $guarded = [
        'id'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
