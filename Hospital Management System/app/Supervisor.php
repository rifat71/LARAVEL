<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    //
    protected $table="supervisors";
    protected $primaryKey="id";
    public $timestamps=false;
}
