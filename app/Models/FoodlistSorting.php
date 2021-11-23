<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodlistSorting extends Model
{
    protected $table = 'foodlist_sorting';
    public $timestamps = false;
    protected $fillable = [
        'foodlist_entry_id',
        'position',
    ];
    protected $hidden = [];
    protected $casts = [];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function foodlistEntry() {
        return $this->hasOne(FoodlistEntry::class, 'id', 'foodlist_entry_id');
    }
}
