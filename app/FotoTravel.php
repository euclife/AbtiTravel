<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoTravel extends Model
{
   	protected $table = 'travel_foto';
    protected $primaryKey = 'id_foto';
    protected $guarded=[];
}
