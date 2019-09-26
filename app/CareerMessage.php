<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerMessage extends Model
{
    protected $fillable = ['name'	,'email'	,'phone'	,'company_name'	,'dob'	,'description'	,'cv_file_path'];
}
