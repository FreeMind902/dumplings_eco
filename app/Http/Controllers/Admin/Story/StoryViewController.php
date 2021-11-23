<?php

namespace App\Http\Controllers\Admin\Story;


class StoryViewController extends StoryController
{
    public function create($id = null) {
        $storyCategories       = $this->toObject($this->foodlistCategoryService->allNewsletterCategoriesGerman());
        $languages             = $this->toObject($this->languageService->allWithContentTypes());
        $storyLocalizations = ($id != null) ? $this->storyService->singleWithImage($id) : null;
        return view('pages.admin.story.create', [
            'storyLocalizations' => $storyLocalizations ?? null,
            'categories'         => $storyCategories ?? null,
            'languages'          => $languages ?? null,
        ]);
    }

    public function index() {
        return view('pages.admin.story.index', ['stories' => $this->storyService->allGerman()]);
    }
}
