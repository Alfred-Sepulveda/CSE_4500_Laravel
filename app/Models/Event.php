<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    $events = Event::select('title', 'start_at AS start', 'end_at AS end')->get();
    protected $fillable = ['title'];
    protected $dates = ['start_at'];
    protected $dates = ['end_at'];

    use HasFactory;
}