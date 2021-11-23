<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footer';
    protected $fillable = [
        'company_info_headline_de',
        'company_info_body_de',
        'company_info_headline_en',
        'company_info_body_en',
        'contact_info_address',
        'contact_info_phone',
        'contact_info_email',
    ];
    protected $hidden = [];
    public $timestamps = false;
}
