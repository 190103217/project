<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
     'first_name', 'last_name', 'image'
    ];
}
