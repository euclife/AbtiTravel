<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAgent extends Model
{
    protected $table = 'user_agent';
    protected $primaryKey = 'id';
    protected $guarded=[];
}
