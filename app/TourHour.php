<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourHour extends Model
{
       protected $table = 'tour_hours';
    protected $primaryKey = 'id_hour';
    protected $guarded=[];
}
