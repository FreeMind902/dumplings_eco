<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodlistExtra extends Model
{
    protected $table = 'foodlist_extras';
    public $timestamps = false;
    protected $fillable = [
        'label_en',
        'label_de',
        'foodlist_entries_id',
    ];
    protected $hidden = [];

    public function foodListEntry() {
        return $this->belongsTo(FoodlistEntry::class, 'foodlist_entries_id', 'id');
    }
}
