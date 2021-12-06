<?php

namespace App\Http\Controllers\Admin\Story;


class StoryViewController extends StoryController
{
    public function create($id = null) {
        return view('pages.admin.story.create', [
            'story' => ($id) ? $this->storyService->single($id) : null
        ]);
    }

    public function index() {
        return view('pages.admin.story.index', ['stories' => $this->storyService->all()]);
    }
}
