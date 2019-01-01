<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorPatient extends Model
{
    //
    protected $table="doctorpatient";
    protected $primaryKey="id";
    public $timestamps=false;
}
