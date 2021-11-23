<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'newsletters';
    public $timestamps = true;
    protected $fillable = [
        'subject_de',
        'headline_de',
        'body_de',
        'subject_en',
        'headline_en',
        'body_en',
        'deleted_at',
        'last_send_at',
    ];
    protected $hidden = [];
}
