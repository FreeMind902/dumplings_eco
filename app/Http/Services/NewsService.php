<?php

namespace App\Http\Services;

use App\Models\Localization;
use App\Models\News;
use App\Models\NewsLocalization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class NewsService
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

        $news = News::updateOrCreate(
            ['id' => $postData['id']],
            $postData,
        );
//        dump('$news', $news);
//        dd('HIIIIERR');


        return $news;
    }

    public function allGerman() {
        dump('NewsService->allGerman()');

        $newsArray = [];
        $postNews  = [];
        $newsRaw   = News::has('newsLocalizations.localizationGerman')
            ->with([
                'category.categoryLocalizationGerman.localizationGerman',
                'newsLocalizationsGerman.localizationGerman.language',
                'newsLocalizationsGerman.localizationGerman.contentType'
            ])->get();
        dump($newsRaw);
        foreach($newsRaw as $news) {
//            dump($news);

            $newsArray['id']    = $news->id;
            $newsArray['start'] = $news->start;
            $newsArray['end']   = $news->end;
            foreach($news->newsLocalizationsGerman as $item) {
//                dump($item);

                $newsArray['localizations'][$item->localizationGerman->contentType->label] = [
                    'id'              => $item->id,
                    'label'           => $item->localizationGerman->label,
                    'category_label'  => $news->category->categoryLocalizationGerman->localizationGerman->label,
                    'iso_code'        => $item->localizationGerman->language->iso_code,
                    'category_id'     => $news->category_id,
                    'localization_id' => $item->localizationGerman->id,
                    'content_type_id' => $item->localizationGerman->content_type_id,
                    'language_id'     => $item->localizationGerman->language_id,
                ];

            }
            $postNews[] = $newsArray;
        }
        dump($postNews);
        dd('HIIERR');
        return $news;
    }

    public function all() {
        return News::get();
    }

    public function allActive() {
        $nowToDate = now()->toDateString();
        return News::where([
            ['display_from','>=', $nowToDate],
            ['display_to','>=', $nowToDate],
        ])->get();

    }

    public function allDependingOnLanguage() {
//        dump('newsService->allGerman()');

        $newsArray = [];
        $postnews  = [];

        $now = now()->toDateString();
//        dump($now);
//        dd('HIIIERR');

        if(App::isLocale('en')) {
            $storiesRaw = News::with([
                'newsLocalizationsEnglish.localizationEnglish.language',
                'newsLocalizationsEnglish.localizationEnglish.contentType',
                'image'

            ])->where('start', '>', $now)
//                ->where('end', '> ', $now)
                ->get();
        } elseif(App::isLocale('de')) {
            $storiesRaw = News::with([
                'newsLocalizationsGerman.localizationGerman.language',
                'newsLocalizationsGerman.localizationGerman.contentType',
                'image'

            ])->where('start', '>', $now)
                ->where('end', '>', $now)
                ->get();
        }
//        dump(App::getLocale());

//        dd($storiesRaw);
        foreach($storiesRaw as $news) {
//            dump($news);


            if($news->image != null) {

                $newsArray['image_id']   = $news->image->id ?? null;
                $newsArray['image_path'] = $news->image->path ?? null;
            }


            $newsArray['id']        = $news->id;
            $newsArray['is_active'] = $news->is_active;

            if(App::isLocale('en')) {
                foreach($news->newsLocalizations as $item) {
                    $newsArray['localizations'][$item->localization->contentType->label] = [
                        'id'              => $item->id,
                        'label'           => $item->localization->label,
                        'iso_code'        => $item->localization->language->iso_code,
                        'localization_id' => $item->localization->id,
                        'content_type_id' => $item->localization->content_type_id,
                        'language_id'     => $item->localization->language_id,
                    ];
                }
            } elseif(App::isLocale('de')) {
                foreach($news->newsLocalizationsGerman as $item) {
                    $newsArray['localizations'][$item->localization->contentType->label] = [
                        'id'              => $item->id,
                        'label'           => $item->localization->label,
                        'iso_code'        => $item->localization->language->iso_code,
                        'localization_id' => $item->localization->id,
                        'content_type_id' => $item->localization->content_type_id,
                        'language_id'     => $item->localization->language_id,
                    ];
                }
            }

            $postnews[] = $newsArray;
        }
//        dump($postnews);
//        dd('HIIERR');
        return $this->toObject($postnews);
    }

    public function single($id = null) {
        return News::whereId($id)->first();
    }

    public function singleRaw($id = null) {
        return News::with([
            'newsLocalizations.localization.language',
            'newsLocalizations.localization.contentType'
        ])->whereId($id)->first();
    }

    public function delete($id = null) {
        if($id) {
            $news = $this->single($id);
            if($news) {
                $this->deleteImage($id);
                $news->delete();
            }
        }

    }

    public function deleteImage($id = null) {
        $news                  = $this->single($id);
        $news->image_file_name = null;
        $news->image_path      = null;
        $news->save();
        if(Storage::exists('public/images/upload/news/' . $news->image_file_name)) {
            Storage::delete('public/images/upload/news/' . $news->image_file_name);
        }
    }
}