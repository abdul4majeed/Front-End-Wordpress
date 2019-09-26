<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestimonialBodySection extends Model
{
    protected $fillable = ['name','description','role','pic_url','rating','link_id'];

    public function getPicUrlAttribute($value)
{
    return asset('testimonial/image').'/'.($value);
}


}
