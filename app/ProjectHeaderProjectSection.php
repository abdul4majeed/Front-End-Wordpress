<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectHeaderProjectSection extends Model
{

    protected $fillable = ['name','tag','url','home_page','link_id'];


    public function getUrlAttribute($value)
    {
        return asset('project/image').'/'.($value);
    }
    
}
