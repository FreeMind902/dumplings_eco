<?php

namespace App\Http\Controllers\Admin\Newsletter;

class NewsletterViewController extends NewsletterController
{
    public function create($id = null) {
        $newsletter = ($id != null) ? $this->newsletterService->single($id) : null;
        return view('pages.admin.newsletter.create',
            [
                'newsletter' => $newsletter,
            ],
        );
    }

    public function index() {
       $newsletters = $this->newsletterService->all();
        return view('pages.admin.newsletter.index', ['newsletters' => $newsletters]);
    }

    public function send() {
        return view('pages.admin.newsletter.send', [
            'newsletters' => $this->newsletterService->all(),
            'subscribers'  => $this->subscriberService->all(),
        ]);
    }
}
