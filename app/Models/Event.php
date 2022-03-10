<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title'];
    protected $dateFormat = ['start_at',
                                'end_at'];

    //use HasFactory;
}