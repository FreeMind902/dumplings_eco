<?php

namespace App\Http\Controllers\Admin\Newsletter;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreNewsletterRequest;
use App\Mail\NewsletterMail;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
//  public function update(StoreNewsletterRequest $request) {
    public function update(Request $request) {
        $this->newsletterService->insert($request);

        return redirect()->route('admin.newsletter.index')->with('status', 'Erfolgreich angelegt');
    }

    public function remove($id) {
        $this->newsletterService->delete($id);

        return redirect()->route('admin.newsletter.index')->with('status', 'Newsletter erfolgreich gelöscht');
    }

    public function sendNewsletter(Request $request) {
        $postData = $request->all();
        $newsletter = $this->newsletterService->single($postData['newsletter_id']);

        foreach($postData['subscriber_ids'] as $subscriberId) {
            $subscriber = $this->subscriberService->single($subscriberId);
            Mail::to($subscriber->email)->send(new NewsletterMail($newsletter, $subscriber));
        }

        return redirect()->route('admin.newsletter.send')->with('status', 'Newsletter erfolgreich versendet');
    }
}
