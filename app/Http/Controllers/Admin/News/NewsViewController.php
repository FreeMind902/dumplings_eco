<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Admin\Newsletter\NewsletterController;

class NewsViewController extends NewsletterController
{
    public function create($id = null) {
        $newsCategories = $this->toObject($this->foodlistCategoryService->allNewsCategoriesGerman());
        $languages      = $this->toObject($this->languageService->allWithContentTypes());
        return view('pages.admin.news.create',
            [
                'categories'       => $newsCategories ?? null,
                'languages'        => $languages ?? null,
                'newsLocalization' => ($id) ? $this->toObject($this->newsService->single($id)) : null,
            ],
        );
    }

    public function index() {
//        dd($this->newsService->allGermanHeading());
        return view('pages.admin.news.index', ['news' => $this->newsService->allGermanHeading()]);
    }
}
