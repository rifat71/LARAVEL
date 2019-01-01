<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table="room";
    protected $primaryKey="rid";
    public $timestamps=false;
}
