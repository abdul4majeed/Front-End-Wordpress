<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubLinkContent extends Model
{
    protected $fillable = ['content','sublink_id','img_url'];

    public function sub_link()
    {
        return $this->belongsTo(SubLink::class,'sublink_id');
    }

    public function getImgUrlAttribute($value)
    {
        return asset('post/image').'/'.($value);
    }
}
