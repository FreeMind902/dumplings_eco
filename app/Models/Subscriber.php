<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscribers';
    protected $fillable = [
        'receives_newsletter',
        'name',
        'email',
        'language_iso_code',
        'deleted_at',
    ];
    protected $hidden = [];
}
