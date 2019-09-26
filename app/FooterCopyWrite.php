<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterCopyWrite extends Model
{
    protected $fillable = ['footer_copyright_string','footer_site_name_string','footer_designer_title','footer_developer_name','footer_url'];
}
