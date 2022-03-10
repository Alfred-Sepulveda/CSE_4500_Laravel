<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title'];
    protected $dates = ['start_at'];
    protected $dates = ['end_at'];
    {{ $user->from_date->format('d/m/Y')}}
    use HasFactory;
}