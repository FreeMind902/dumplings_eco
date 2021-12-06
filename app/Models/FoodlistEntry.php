<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FoodlistEntry extends Model
{
    protected $table = 'foodlist_entries';
    public $timestamps = false;

    protected $fillable = [
        'label_de',
        'label_en',
        'foodlist_information_de',
        'foodlist_information_en',
        'is_halal',
        'is_veggie',
        'is_vegan',
        'is_spicy',
        'spicy_level',
        'container_size',
        'foodlist_sub_categories_id',
    ];
    protected $hidden = [];

    public function foodlistOptions() {
        return $this->hasMany(FoodlistOption::class, 'foodlist_entries_id', 'id');
    }
    public function foodlistSubCategory() {
        return $this->belongsTo(FoodlistSubCategory::class, 'foodlist_sub_categories_id', 'id');
    }
}
