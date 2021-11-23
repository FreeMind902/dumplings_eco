<?php

namespace App\Http\Controllers\Admin\Newsletter;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreNewsletterRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller {
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
    dump($request->all());
    dd('HIIIER');
    return redirect()->route('admin.newsletter.index')->with('status', 'Newsletter erfolgreich versendet');
  }
  
}
