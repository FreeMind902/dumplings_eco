<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Localization;
use App\Models\FoodlistEntry;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrontendViewController extends FrontendController
{
    public function foodlist()
    {
        return view('pages.frontend.foodlist',
            [
                'categories' => $this->foodlistCategoryService->getAllFooListCategoriesWithSubCategoriesAndFoodListEntriesWithFooListOptions()
            ]
        );
    }

    public function index(Request $request)
    {
        return view(
            'pages.frontend.index',
            [
                'stories' => $this->storyService->all() ?? null,
                'news' =>$this->newsService->allActive(),
            ]
        );
    }

    public function createAdminUser()
    {
        return User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@wanna-eat.de',
                'password' => Hash::make('Z&bH6TwtJz3!Gh7x'),
            ]
        );
    }
}
