<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['user_id','link'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function sub_links()
    {
        return $this->hasMany(SubLink::class,'link_id');
    }

    public function link_content()
    {
        return $this->hasMany(LinkContent::class,'link_id');
    }
}
