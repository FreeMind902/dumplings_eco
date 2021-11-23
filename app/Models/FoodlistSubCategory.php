<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FoodlistSubCategory extends Model
{
    protected $table = 'foodlist_sub_categories';
    public $timestamps = false;

    protected $fillable = [
        'label_de',
        'label_en',
        'sub_category_information_de',
        'sub_category_information_en',
        'foodlist_categories_id',
    ];
    protected $hidden = [];

    public function foodListEntries() {
        return $this->hasMany(FoodlistEntry::class, 'foodlist_sub_categories_id', 'id');
    }
    public function category() {
        return $this->belongsTo(FoodlistCategory::class, 'foodlist_categories_id', 'id');
    }
}
