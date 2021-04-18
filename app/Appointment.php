<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
     'name', 'surname', 'email', 'reason', 'doctor', 'date', 'content'
    ];
}
