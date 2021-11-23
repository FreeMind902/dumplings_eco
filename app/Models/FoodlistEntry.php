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
        'foodlist_sub_categories_id',
    ];
    protected $hidden = [];

    public function foodListExtras() {
        return $this->hasMany(FoodlistExtra::class, 'foodlist_entries_id', 'id');
    }
    public function foodlistSubCategory() {
        return $this->belongsTo(FoodlistSubCategory::class, 'foodlist_sub_categories_id', 'id');
    }
}
