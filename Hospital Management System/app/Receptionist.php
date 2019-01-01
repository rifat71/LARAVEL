<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receptionist extends Model
{
    //
    protected $table="receptionists";
    protected $primaryKey="id";
    public $timestamps=false;
}
