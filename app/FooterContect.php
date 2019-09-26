<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterContect extends Model
{
    protected $fillable = ['description','address','fb_link','twitter_link','instagram_link','pinterest','gplus_link','watsapp_number','watsapp_text'];
}
