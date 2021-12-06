<?php

namespace App\Http\Services;

use App\Models\Localization;
use App\Models\Story;
use App\Models\StoryLocalization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class StoryService
{
    public function insert(Request $request) {

        $postData = $request->all();
        unset($postData['_token']);
//        dd($postData);
//        dump($postData);
        $imageService = new ImageService();

        if(!isset($postData['has_image'])) {
            unset($postData['image']);
            $file                        = $request->file('image');
            $storedFile                  = $imageService->put($file);
            $postData['image_file_name'] = $storedFile->image_file_name;
            $postData['image_path']      = $storedFile->image_path;
        }
//            dd($postData);

        if(!isset($postData['is_active'])) {
            $postData['is_active'] = 0;
        }
        $story = Story::updateOrCreate(
            ['id' => $postData['id']],
            $postData,
        );
//        dump('$story', $story);
//
//        dd('HIIIIERR');
        return $story;
    }

    public function all() {
        $story = Story::get();
//        dump(Story::get());
//        dd('HIIERR');
        return Story::get();
    }

    public function allDependingOnLanguage($request) {
//        dump('storyService->allGerman()');

        $storyArray = [];
        $poststory  = [];


        if(App::getLocale() == 'en') {
            $storiesRaw = Story::has('storyLocalizations.localizationEnglish')->with([
                'storyLocalizationsEnglish.localizationEnglish.language',
                'storyLocalizationsEnglish.localizationEnglish.contentType',
                'image'

            ])->get();
//            dump('ENGLISCH');
//            dump($storiesRaw);
        } elseif(App::getLocale() == 'de') {
            $storiesRaw = Story::has('storyLocalizations.localizationGerman')->with([
                'storyLocalizationsGerman.localizationGerman.language',
                'storyLocalizationsGerman.localizationGerman.contentType',
                'image'

            ])->get();
//            dump('DEUTSCH');
//            dump($storiesRaw);
        }
        foreach($storiesRaw as $story) {
//            dump($story);


            if($story->image != null) {

                $storyArray['image_id']   = $story->image->id ?? null;
                $storyArray['image_path'] = $story->image->path ?? null;
            }


            $storyArray['id']        = $story->id;
            $storyArray['is_active'] = $story->is_active;

            if(App::getLocale() == 'en') {

                foreach($story->storyLocalizations as $item) {

                    $storyArray['localizations'][$item->localization->contentType->label] = [
                        'id'              => $item->id,
                        'label'           => $item->localization->label,
                        'iso_code'        => $item->localization->language->iso_code,
                        'localization_id' => $item->localization->id,
                        'content_type_id' => $item->localization->content_type_id,
                        'language_id'     => $item->localization->language_id,
                    ];

                }
//                dump('ENGLISCH');
//                dump($storyArray);
            } elseif(App::getLocale() == 'de') {
                foreach($story->storyLocalizationsGerman as $item) {

                    $storyArray['localizations'][$item->localization->contentType->label] = [
                        'id'              => $item->id,
                        'label'           => $item->localization->label,
                        'iso_code'        => $item->localization->language->iso_code,
                        'localization_id' => $item->localization->id,
                        'content_type_id' => $item->localization->content_type_id,
                        'language_id'     => $item->localization->language_id,
                    ];

                }
//                dump('DEUTSCH');
//                dump($storyArray);
            }


            $poststory[] = $storyArray;
        }
//        dump($poststory);
//        dd('HIIERR');
        return $this->toObject($poststory);
    }

    public function allActive() {
        return Story::with('image')->whereIsActive('1')->get();
    }

    public function single($id = null) {
        return Story::whereId($id)->first();

    }

    public function delete($id = null) {
        if($id) {
            $story = $this->single($id);
            if($story) {
                $this->deleteImage($id);
                $story->delete();
            }
        }
    }

    public function deleteImage($id = null) {
        if ($id) {
            $story                  = $this->single($id);
            dd($story);
            $story->image_file_name = null;
            $story->image_path      = null;
            $story->save();
            if(Storage::exists('public/images/upload/stories/' . $story->image_file_name)) {
                Storage::delete('public/images/upload/stories/' . $story->image_file_name);
            }
        }
    }
}