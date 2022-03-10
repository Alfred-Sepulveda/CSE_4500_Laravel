<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title'];
    protected $dates = ['start_at',
                        'end_at'
                    ];
    const UPDATED_AT = false;
    const CREATED_AT = false;
    //use HasFactory;
}