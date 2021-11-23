<?php

namespace App\Http\Controllers\Admin\Subscriber;

class SubscriberViewController extends SubscriberController {
  public function create($id = null) {
    return view(
        'pages.admin.subscriber.create',
        [
            'categories' => $this->toObject($this->foodlistCategoryService->allNewsletterCategoriesGerman()),
            'subscriber' => ($id) ? $this->subscriberService->single($id) : null,
            'languages' => $this->languageService->all(),
        ],
    );
  }
  
  public function index() {
    return view('pages.admin.subscriber.index', ['subscribers' => $this->subscriberService->all()]);
  }
}
