<?php

namespace App\Http\Controllers\Admin\Newsletter;

class NewsletterViewController extends NewsletterController
{
    public function create($id = null) {
        $newsletterLocalizations = ($id != null) ? $this->newsletterService->single($id) : null;
        $newsletterCategories    = $this->toObject($this->foodlistCategoryService->allNewsletterCategoriesGerman());
        $languages               = $this->toObject($this->languageService->allWithContentTypes());
        return view('pages.admin.newsletter.create',
            [
                'categories'              => $newsletterCategories ?? null,
                'newsletterLocalizations' => $newsletterLocalizations,
                'languages'               => $languages ?? null,
            ],
        );
    }

    public function index() {
//       $newsletters = $this->toObject($this->newsletterService->all());
        $newsletters = $this->toObject($this->newsletterService->allGerman());
        return view('pages.admin.newsletter.index', ['newsletters' => $newsletters]);
    }

    public function send() {
        return view('pages.admin.newsletter.send', [
            'newsletters' => $this->toObject($this->newsletterService->allGerman()),
            'subcribers'  => $this->subscriberService->all(),
        ]);
    }
}
