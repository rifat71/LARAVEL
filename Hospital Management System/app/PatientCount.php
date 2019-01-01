<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientCount extends Model
{
    //
    protected $table="patientcount";
    protected $primaryKey="tpatient";
    public $timestamps=false;
}
