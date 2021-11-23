<?php

namespace App\Http\Services;

use App\Models\Localization;
use App\Models\Story;
use App\Models\StoryLocalization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StoryService
{
    public function insert(Request $request) {
        $postData     = $request->all('story')['story'];
        $imageService = new ImageService();
//dd($postData);
        if(!isset($postData['has_image'])) {
            unset($postData['image']);
            $file       = $request->file('story.image');
            $storedFile = $imageService->put($file);

            $postData['image_id']     = $storedFile->id;
            $postData['img_filename'] = $storedFile->filename;
            $postData['img_path']     = $storedFile->path;
            $imageId                  = $storedFile->id;
        } else {

            $imageId = $postData['image_id'];
        }

        if(!isset($postData['is_active'])) {
            $postData['is_active'] = 0;
        }

        $story = Story::updateOrCreate(
            ['id' => $postData['id']],
            [
                'is_active' => $postData['is_active'],
                'image_id'  => $postData['image_id'],
            ],
        );
//        dump('$story', $story);

        foreach($postData['labels'] as $key => $contentType) {
//            dump('$contentType', $contentType);
//            dump('$key', $key);
            foreach($contentType as $localization) {
//                dump('$localization', $localization);
                $localizationUpdated = Localization::updateOrCreate(
                    ['id' => $localization['localization_id']],
                    [
                        'label'           => $localization['label'],
                        'language_id'     => $localization['language_id'],
                        'content_type_id' => $localization['content_type_id'],
                    ]);
                if($localization['localization_id'] == null) {
                    $localization['localization_id'] = $localizationUpdated->id;
                }
//            dump($localizationUpdated);
//            dump($story->id);

                $storyLocalization = StoryLocalization::updateOrCreate(
                    ['id' => $localization['story_localization_id']],
                    [
                        'story_id'        => $story->id,
                        'localization_id' => $localizationUpdated->id,
                    ]);
//            dump($storyLocalization);

            }
        }

//        dd('HIIIIERR');
        return $story;
    }

    public function allGerman() {
//        dump('storyService->allGerman()');

        $storyArray = [];
        $poststory  = [];
        $storyRaw   = Story::has('storyLocalizations.localizationGerman')
            ->with([
                'storyLocalizationsGerman.localizationGerman.language',
                'storyLocalizationsGerman.localizationGerman.contentType'
            ])->get();
//        dump($storyRaw);
        foreach($storyRaw as $story) {
//            dump($story);

            $storyArray['id']        = $story->id;
            $storyArray['is_active'] = $story->is_active;
            foreach($story->storyLocalizationsGerman as $item) {
//                dump($item);

                $storyArray['localizations'][$item->localizationGerman->contentType->label] = [
                    'id'              => $item->id,
                    'label'           => $item->localizationGerman->label,
                    'iso_code'        => $item->localizationGerman->language->iso_code,
                    'localization_id' => $item->localizationGerman->id,
                    'content_type_id' => $item->localizationGerman->content_type_id,
                    'language_id'     => $item->localizationGerman->language_id,
                ];

            }
            $poststory[] = $storyArray;
        }
//        dump($poststory);
//        dd('HIIERR');
        return $this->toObject($poststory);
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

    public function singleWithImage($id) {

        $storyRaw = Story::with([
            'storyLocalizations.localization.language',
            'storyLocalizations.localization.contentType',
            'image'
        ])->whereId($id)->first();

//        dump($storyRaw);

        $story['id']        = $storyRaw->id;
        $story['is_active'] = $storyRaw->is_active;


        if($storyRaw->image != null) {

            $story['image_id']   = $storyRaw->image->id ?? null;
            $story['image_path'] = $storyRaw->image->path ?? null;
        }

        foreach($storyRaw->storyLocalizations as $item) {
//            dump($item->localization->contentType->label);
            $story['localizations'][$item->localization->language->label][$item->localization->contentType->label] = [
                'id'              => $item->id,
                'label'           => $item->localization->label,
                'iso_code'        => $item->localization->language->iso_code,
                'category_id'     => $storyRaw->category_id,
                'localization_id' => $item->localization->id,
                'content_type_id' => $item->localization->content_type_id,
                'language_id'     => $item->localization->language_id,
            ];
        }
//        dump($story);
//        dd('HIIIERRR');
        return $this->toObject($story);

    }

    public function delete($id) {
        return Story::whereId($id)->delete();
    }

    public function toObject($array) {
        return json_decode(json_encode($array));
    }
}