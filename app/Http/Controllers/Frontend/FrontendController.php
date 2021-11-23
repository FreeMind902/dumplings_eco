<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class FrontendController extends Controller {

    public function setLocale($lang)
    {
        App::setLocale($lang);
        session(['applocale' => $lang]);
        return redirect()->back();
    }
}
