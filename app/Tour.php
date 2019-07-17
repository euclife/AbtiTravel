<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
   	protected $table = 'travel_tour';
    protected $primaryKey = 'id_tour';
    protected $guarded=[];
}
