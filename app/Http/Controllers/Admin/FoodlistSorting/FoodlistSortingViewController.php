<?php

namespace App\Http\Controllers\Admin\FoodlistSorting;

use App\Http\Controllers\Admin\Foodlist\FoodlistController;

class FoodlistSortingViewController extends FoodlistController
{
    public function index() {
        $categories = $this->toObject($this->foodlistCategoryService->foodlistCategoriesWithFoodlistSortingAndEntriesGerman());
        if(!$categories) {
            $categories = $this->toObject($this->getDefaultSorting());
        }
        return view(
            'pages.admin.foodlist.sorting',
            [
                'categories' => $categories ?? null,
            ]
        );
    }

    public function getDefaultSorting() {
        $categories         = [];
        $categoriesRaw      = $this->toObject($this->foodlistCategoryService->allFoodlistCategoriesGerman());
        $foodlistEntriesRaw = $this->foodlistService->allGerman();
        foreach($categoriesRaw as $categoryRaw) {
            $categories[$categoryRaw->id]['id']    = $categoryRaw->id;
            $categories[$categoryRaw->id]['label'] = $categoryRaw->label;
            foreach($foodlistEntriesRaw as $foodlistEntryRaw) {
                if($foodlistEntryRaw->category_id == $categoryRaw->id) {
                    $categories[$categoryRaw->id]['foodlistEntries'][] = $foodlistEntryRaw;
                }
            }
        }
        return $categories;
    }
}
