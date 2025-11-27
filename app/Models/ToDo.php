<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    //
    protected $fillable = ['nimi', 'tehtavan_kuvaus', 'status', 'maarapaiva', 'kiireellisyys'];
}
