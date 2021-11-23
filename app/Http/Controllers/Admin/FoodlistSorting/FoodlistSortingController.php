<?php

namespace App\Http\Controllers\Admin\FoodlistSorting;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFoodListEntryRequest;
use App\Models\FoodlistSorting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodlistSortingController extends Controller {
   public function update(Request $request) {
    $foodlistEntry = $this->foodlistSortingService->insert($request);
    
    return redirect()->route('admin.foodlist.index')->with('status', 'Speisenkartensortierung erfolgreich gespeichert');
  }
}
