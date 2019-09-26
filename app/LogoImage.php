<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogoImage extends Model
{
    protected $fillable = [
        'image_logo_path','image_title_name',
    ];
}
