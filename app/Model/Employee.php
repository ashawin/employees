<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='employees';
    protected $fillable=['type','prefix','firstname','lastname','middlename','uan','dob','gender','address1','address2','state','city','country','zip','role','martial_status','blood_group','emp_group','designation','nationlity','actual_dob','altmobile','extnumber','report_manager','designation','email','department','mother_name','father_name'];
}
