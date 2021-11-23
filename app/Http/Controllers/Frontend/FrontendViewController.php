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
                'categories' => $this->foodlistCategoryService->getAllFooListCategoriesWithSubCategoriesAndFoodListEntriesWithFooListExtras()
            ]
        );
    }

    public function index(Request $request)
    {
        return view(
            'pages.frontend.index',
//            [
//                'stories' => $this->storyService->allDependingOnLanguage($request) ?? null,
//                'news' =>$this->newsService->allDependingOnLanguage(),
//            ]
        );
    }

    public function createAdminUser()
    {
        return User::create(
            [
                'name' => 'Admin',
                'email' => 'steven@testet.test',
                'password' => Hash::make('test1234'),
            ]
        );
    }
}
