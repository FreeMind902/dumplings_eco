<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodlistOption extends Model
{
    protected $table = 'foodlist_options';
    public $timestamps = false;
    protected $fillable = [
        'label_en',
        'label_de',
        'is_halal',
        'is_veggie',
        'is_vegan',
        'is_spicy',
        'spicy_level',
        'foodlist_entries_id',
    ];
    protected $hidden = [];

    public function foodListEntry() {
        return $this->belongsTo(FoodlistEntry::class, 'foodlist_entries_id', 'id');
    }
}
