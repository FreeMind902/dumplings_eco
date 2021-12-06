<?php

namespace App\Http\Controllers\Admin\Subscriber;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreSubscriberRequest;
use Illuminate\Http\Request;

class SubscriberController extends Controller {
  public function update(Request $request) {
    $subscriber = $this->subscriberService->insert($request);
    
    return redirect()->route('admin.subscriber.index')->with('status', 'Newsletter Empfänger'.$subscriber->name.'erfolgreich angelegt');
  }
  
  public function remove($id) {
    $this->subscriberService->delete($id);
    
    return redirect()->route('admin.subscriber.index')->with('status', 'Newsletter Empfänger erfolgreich gelöscht');
  }
}
