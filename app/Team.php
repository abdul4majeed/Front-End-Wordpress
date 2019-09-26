<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name',    'role',    'fb','twitter','instagram','pinterest','googleplus','image_path',];

    public function getImagePathAttribute($value)
    {
        return asset('team_members/image').'/'.($value);
    }
    
}
