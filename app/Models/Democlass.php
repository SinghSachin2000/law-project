<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Democlass extends Model
{
    use HasFactory;
    protected $table = 'democlasses'; 
    protected $fillable = [
        'name', 
        'number', 
        'email', 
        'course', 
        'message',
        'city',
    ];
}
