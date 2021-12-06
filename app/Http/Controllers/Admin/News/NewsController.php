<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreNewsRequest;
use Illuminate\Http\Request;

class NewsController extends Controller {
  public function update(Request $request) {
    $subscriber = $this->newsService->insert($request);
    
    return redirect()->route('admin.news.index')->with('status', 'News Empfänger '.$subscriber->name.' erfolgreich angelegt');
  }
  
  public function remove($id) {
    $this->newsService->delete($id);
    
    return redirect()->route('admin.news.index')->with('status', 'News Empfänger erfolgreich gelöscht');
  }

  public function removeImage($id) {
    $this->newsService->deleteImage($id);

    return redirect()->route('admin.news.create',[$id])->with('status', 'News Empfänger erfolgreich gelöscht');
  }
}
