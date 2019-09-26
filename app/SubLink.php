<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubLink extends Model
{
    protected $fillable = ['sub_link','link_id','user_id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class,'user_id');
    }

    public function link()
    {
        return $this->belongsTo(\App\Link::class,'link_id');
    }

    public function sub_link_contents()
    {
        return $this->hasMany(SubLinkContent::class,'sublink_id');
    }
}
