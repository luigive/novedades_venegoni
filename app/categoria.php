<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
     protected $table = 'categoria';
     protected $fillable = ['nombre'];
     protected $guarded = ['id'];

}

