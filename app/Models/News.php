<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    public $timestamps = true;
    protected $fillable = [
        'headline_de',
        'body_de',
        'headline_en',
        'body_en',
        'image_path',
        'image_file_name',
        'display_from',
        'display_to',
        'deleted_at',

    ];
    protected $hidden = [];
}
