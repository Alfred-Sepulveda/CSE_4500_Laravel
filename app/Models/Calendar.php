<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = ['title'];
    protected $dates = ['start_at',
                        'end_at'
                    ];

    //use HasFactory;
}