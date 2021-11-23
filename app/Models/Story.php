<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'stories';
    public $timestamps = true;
    protected $fillable = [
        'is_visible_to_frontend',
        'headline_de',
        'body_de',
        'headline_en',
        'body_en',
        'image_path',
        'image_file_name',
        'deleted_at',
    ];
    protected $hidden = [];
}
