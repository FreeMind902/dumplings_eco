<?php

namespace App\Http\Services;

use App\Models\Localization;
use App\Models\Newsletter;
use App\Models\NewsletterLocalization;
use Illuminate\Http\Request;

class NewsletterService
{
    public function insert(Request $request) {
        $postData = $request->all();
        $newsletter = Newsletter::updateOrCreate(
            ['id' => $postData['id']],
            $postData
        );
        return $newsletter;
    }

    public function all() {

        return Newsletter::get();
    }

    public function newsletterCategories() {
        return Newsletter::whereContext('newsletter')->get();
    }

    public function single($id = null) {
        return Newsletter::whereId($id)->first();
    }

    public function delete($id) {
        $newsletter = $this->single($id);
        $newsletter->delete();
    }

    public function toObject($array) {
        return json_decode(json_encode($array));
    }
}