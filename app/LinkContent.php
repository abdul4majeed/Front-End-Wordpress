<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkContent extends Model
{
    protected $fillable = ['content','link_id'];

    public function link()
    {
        return $this->belongsTo(Link::class,'link_id');
    }
}
