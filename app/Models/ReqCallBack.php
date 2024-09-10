<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReqCallBack extends Model
{
    use HasFactory;
    protected $table = 'reqcallback'; 
    protected $fillable = [
        'fullName', 
        'number', 
        'email', 
        'course', 
        'city',
    ];
}
