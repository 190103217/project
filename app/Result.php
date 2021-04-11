<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'name', 'patient_id', 'biochemical', 'immune', 'allergy', 'hormonal' 
    ];
}
