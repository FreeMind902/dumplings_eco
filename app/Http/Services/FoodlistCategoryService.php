<?php

namespace App\Http\Services;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreFoodListEntryRequest;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Models\FoodlistCategory;
use App\Models\FoodlistEntry;
use App\Models\FoodlistExtra;
use App\Models\FoodlistSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FoodlistCategoryService
{
    public function insertFoodlistEntry(StoreFoodListEntryRequest $request) {
        $postData = $request->all();
        unset($postData['_token']);
        $foodlistCategory = FoodlistEntry::updateOrCreate(
            ['id' => $postData['id']],
            $postData
        );
//        dd($foodlistCategory);
        return $foodlistCategory;
    }

    public function insertCategory(StoreCategoryRequest $request) {
        $postData = $request->all();
        unset($postData['_token']);
        $foodListCategory = FoodlistCategory::updateOrCreate(
            ['id' => $postData['id']],
            $postData
        );
    }

    public function insertFoodlistExtra(Request $request) {
        $postData = $request->all();
        unset($postData['_token']);
        $foodListCategory = FoodlistExtra::updateOrCreate(
            ['id' => $postData['id']],
            $postData
        );
    }

    public function insertSubCategory(StoreSubCategoryRequest $request) {
        $postData = $request->all();
        unset($postData['_token']);
        $foodlistCategory = FoodlistSubCategory::updateOrCreate(
            ['id' => $postData['id']],
            $postData
        );
        return $foodlistCategory;
    }

    public function getAllFooListCategoriesWithSubCategoriesAndFoodListEntriesWithFooListExtras() {
        return FoodlistCategory::with('foodlistSubCategories.foodListEntries.foodListExtras')->get();
    }

    public function getAllFoodlistEntriesWithExtrasAndCategoryWithSubCategory() {
        return FoodlistEntry::with('foodListExtras','foodlistSubCategory.category')->get();
    }

    public function getAllFoodlistExtrasWithFoodListEntry() {
        return FoodlistExtra::has('foodListEntry')->with('foodListEntry')->get();
    }

    public function getSingleFoodlistExtraWithFoodListEntryById($id) {
        return FoodlistExtra::with('foodListEntry')->where('id', $id)->first();
    }

    public function getsSingleFoodlistEntryWithSubCategoryById($id) {
        return FoodlistEntry::with('subCategory')->where('id', $id)->first();
    }

    public function getAllFoodlistEntries() {
        return FoodlistEntry::get();
    }

    public function getAllCategories() {
        return FoodlistCategory::get();
    }

    public function getAllCategoriesWithSubCategories() {
        return FoodlistCategory::with('foodlistSubCategories.foodListEntries')->get();
    }

    public function getAllSubCategories() {
        return FoodlistSubCategory::get();
    }
    public function getAllSubCategoriesByCategoryId($id) {
        return FoodlistSubCategory::where('foodlist_categories_id', $id)->get();
    }

    public function getAllSubCategoriesWithCategory() {
        return FoodlistSubCategory::with('category')->get();
    }

    public function getSingleSubCategoryWithCategory($id = null) {
        return FoodlistSubCategory::with('category')->where('id', $id)->first();
    }

    public function getAllFoodlistCategories() {
        return FoodlistCategory::where('context_type_de', 'Speisekarte')->get();
    }

    public function single($id) {
        return FoodlistCategory::whereId($id)->first();
    }

    public function singleGerman($id) {
        return FoodlistCategory::with(['categoryLocalizations.localizationGerman.contentType', 'categoryLocalizations.localizationGerman.language'])->whereId($id)->first();
    }

    public function deleteCategory($id) {
        if($id) {
            FoodlistCategory::whereId($id)->delete();
        }
    }

    public function deleteSubCategory($id) {
        if($id) {
            FoodlistSubCategory::whereId($id)->delete();
        }
    }

    public function deleteFoodlistEntry($id) {
        if($id) {
            FoodlistEntry::whereId($id)->delete();
        }
    }

    public function deleteFoodlistExtra($id) {
        if($id) {
            FoodlistExtra::whereId($id)->delete();
        }
    }

    public function contextTypes() {
        $contextTypes = ContextType::get();
        return $contextTypes;
    }

    public function toObject($array) {
        return json_decode(json_encode($array));
    }
}
