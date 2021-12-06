<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Admin\Newsletter\NewsletterController;

class NewsViewController extends NewsletterController
{
    public function create($id = null) {
//        $newsCategories = $this->toObject($thi->foodlistCategoryService->allNewsCategoriesGerman());
        return view('pages.admin.news.create',
            [
                'news' => ($id) ? $this->newsService->single($id) : null,
            ],
        );
    }

    public function index() {
//        dd($this->newsService->all());
        return view('pages.admin.news.index', ['news' => $this->newsService->all()]);
    }
}
