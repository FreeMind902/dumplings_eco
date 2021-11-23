<?php

namespace App\Http\Controllers\Admin\Foodlist;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreFoodListEntryRequest;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Models\FoodlistSorting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodlistController extends Controller
{
    public function updateFoodListEntry(StoreFoodListEntryRequest $request) {
        $this->foodlistCategoryService->insertFoodlistEntry($request);
        return redirect()->route('admin.foodlist.index')->with('status', 'Erfolgreich angelegt');
    }

    public function updateFoodListExtra(Request $request) {
        $this->foodlistCategoryService->insertFoodlistExtra($request);
        return redirect()->route('admin.foodlist.extra.index')->with('status', 'Erfolgreich angelegt');
    }

    public function updateCategory(StoreCategoryRequest $request) {
        $this->foodlistCategoryService->insertCategory($request);
        return redirect()->route('admin.foodlist.category.index')->with('status', 'Erfolgreich angelegt');
    }

    public function updateSubCategory(StoreSubCategoryRequest $request) {
        $this->foodlistCategoryService->insertSubCategory($request);
        return redirect()->route('admin.foodlist.sub-category.index')->with('status', 'Erfolgreich angelegt');
    }

    public function removeFoodListExtra($id) {
        $this->foodlistCategoryService->deleteFoodlistExtra($id);
        return redirect()->route('admin.foodlist.extra.index')->with('status', 'Erfolgreich gelöscht');
    }

    public function removeFoodListEntry($id) {
        $this->foodlistCategoryService->deleteFoodlistEntry($id);
        return redirect()->route('admin.foodlist.index')->with('status', 'Erfolgreich gelöscht');
    }

    public function removeCategory($id) {
        $this->foodlistCategoryService->deleteCategory($id);
        return redirect()->route('admin.foodlist.category.index')->with('status', 'Erfolgreich gelöscht');
    }

    public function removeSubCategory($id) {
        $this->foodlistCategoryService->deleteSubCategory($id);
        return redirect()->route('admin.foodlist.sub-category.index')->with('status', 'Erfolgreich gelöscht');
    }

    public function getSubCategoriesById($id) {
        $this->foodlistCategoryService->getAllSubCategoriesByCategoryId($id);
    }
}
