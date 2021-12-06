<?php

namespace App\Http\Controllers\Admin\Foodlist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodlistViewController extends FoodlistController
{
    public function createFoodListEntry($id = null) {
        return view('pages.admin.foodlist.create',
            [
                'categories'    => $this->foodlistCategoryService->getAllCategories() ?? null,
                'subCategories' => $this->foodlistCategoryService->getAllSubCategories() ?? null,
                'foodListEntry' => $this->foodlistCategoryService->getsSingleFoodlistEntryWithSubCategoryById($id) ?? null,
            ],
        );
    }

    public function foodListEntryIndex() {
        return view('pages.admin.foodlist.index',
            [
                'foodListEntries' => $this->foodlistCategoryService->getAllFoodlistEntriesWithOptionsAndCategoryWithSubCategory() ?? null,
            ]
        );
    }

    public function createFoodListExtra($id = null) {
        return view('pages.admin.foodlist.extra.create',
            [
                'foodlistExtra' => $this->foodlistCategoryService->getSingleFoodlistOptionWithFoodListEntryById($id) ?? null,
                'foodListEntries'      => $this->foodlistCategoryService->getAllFoodlistEntries() ?? null,

            ],
        );
    }

    public function foodListExtraIndex() {
        return view('pages.admin.foodlist.extra.index',
            [
                'foodListExtras' => $this->foodlistCategoryService->getAllFoodlistOptionsWithFoodListEntry() ?? null,
            ]
        );
    }

    public function categoriesIndex() {
        return view('pages.admin.foodlist.category.index',
            [
                'foodListCategories' => $this->foodlistCategoryService->getAllCategories() ?? null,
            ]
        );
    }

    public function createCategory($id = null) {
        return view('pages.admin.foodlist.category.create',
            [
                'category' => ($id) ? $this->foodlistCategoryService->single($id) : null,
            ]
        );
    }

    public function subCategoriesIndex() {
        return view('pages.admin.foodlist.sub-category.index',
            [
                'subCategories' => $this->foodlistCategoryService->getAllSubCategoriesWithCategory() ?? null,
            ]
        );
    }

    public function createSubCategory($id = null) {
//        dd($this->foodlistCategoryService->getSingleSubCategoriesWithCategory($id));
        return view('pages.admin.foodlist.sub-category.create',
            [
                'categories'  => $this->foodlistCategoryService->getAllCategories() ?? null,
                'subCategory' => $this->foodlistCategoryService->getSingleSubCategoryWithCategory($id) ?? null,

            ]
        );
    }
}
