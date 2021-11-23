<?php

namespace App\Http\Services;

use App\Models\ContentType;
use App\Models\Language;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class LanguageService
{
//  public function insert(Request $request) {
//    $postData   = $request->all('subscriber')['subscriber'];
//    if (!isset($postData['is_active'])) {
//      $postData['is_active'] = 0;
//    }
//    $subscriber = Language::updateOrCreate(
//
//        ['id' => $postData['id']],
//
//        $postData,
//    );
//    return $subscriber;
//  }

    public function all() {
        return Language::all();
    }

    public function allWithContentTypes() {
        $sortedLanguages = [];

        $languages    = $this->all()->toArray();
        $contentTypes = ContentType::all()->toArray();
        foreach($languages as $key => $language) {
            $language['content_types'] = $contentTypes;
            $sortedLanguages[]         = $language;
        }
        return $this->toObject($sortedLanguages);
    }

    public function single($id) {
        return Language::whereId($id)->first();
    }

    public function delete($id) {
        return Language::whereId($id)->delete();
    }

    public function toObject($array) {
        return json_decode(json_encode($array));
    }
}