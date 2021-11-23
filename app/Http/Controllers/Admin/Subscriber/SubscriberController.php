<?php

namespace App\Http\Controllers\Admin\Subscriber;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreSubscriberRequest;

class SubscriberController extends Controller {
  public function update(StoreSubscriberRequest $request) {
    $subscriber = $this->subscriberService->insert($request);
    
    return redirect()->route('admin.subscriber.index')->with('status', 'Newsletter Empfänger'.$subscriber->name.'erfolgreich angelegt');
  }
  
  public function remove($id) {
    $this->subscriberService->delete($id);
    
    return redirect()->route('admin.subscriber.index')->with('status', 'Newsletter Empfänger erfolgreich gelöscht');
  }
}
