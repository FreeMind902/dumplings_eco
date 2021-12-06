<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FoodlistCategory extends Model
{
    protected $table = 'foodlist_categories';
    public $timestamps = false;
    protected $fillable = [
        'label_de',
        'label_en',
        'image_path',
        'image_file_name',
        'category_information_de',
        'category_information_en',
        'category_second_information_de',
        'category_second_information_en',
        'context_type_de',
        'footline_de',
        'footline_en',
    ];
    protected $hidden = [];

    public function foodlistSubCategories() {
        return $this->hasMany(FoodlistSubCategory::class, 'foodlist_categories_id', 'id');
    }
}
