<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDay extends Model
{
    protected $table = 'tour_days';
    protected $primaryKey = 'id_days';
    protected $guarded=[];
}
