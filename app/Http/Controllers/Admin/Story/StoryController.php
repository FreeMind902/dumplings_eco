<?php

namespace App\Http\Controllers\Admin\Story;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreNewsRequest;
use Illuminate\Http\Request;

class StoryController extends Controller {
  public function update(Request $request) {
    $story = $this->storyService->insert($request);
    
    return redirect()->route('admin.story.index')->with('status', "Story mit dem Titel $story->heading erfolgreich geändert");
    
  }
  
  public function remove($id) {
    $story = $this->storyService->singleWithImage($id);
    $this->storyService->delete($id);
    
    return redirect()->route('admin.story.index')->with('status', 'Eintrag wurde erfolgreich gelöscht');
  }
  
}
