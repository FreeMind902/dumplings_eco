<?php

namespace App\Http\Services;

use App\Models\Localization;
use App\Models\News;
use App\Models\NewsLocalization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class NewsService
{
    public function insert(Request $request) {
        $postData = $request->all('news')['news'];
//        dd($postData);
//        dump($postData);
        $imageService = new ImageService();

        if(!isset($postData['has_image'])) {
            unset($postData['image']);
            $file       = $request->file('news.image');
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

        $news = News::updateOrCreate(
            ['id' => $postData['id']],
            [
                'category_id' => $postData['category_id'],
                'start'       => $postData['start'],
                'end'         => $postData['end'],
                'image_id'    => $imageId,
            ],
        );
//        dump('$news', $news);

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
//            dump($news->id);

                $newsLocalization = NewsLocalization::updateOrCreate(
                    ['id' => $localization['news_localization_id']],
                    [
                        'news_id'         => $news->id,
                        'localization_id' => $localizationUpdated->id,
                    ]);
//            dump($newsLocalization);

            }
        }

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

    public function allGermanHeading() {
//        dump('NewsService->allGermanHeading()');

        $newsArray = [];
        $postNews  = [];
        $newsRaw   = News::has('newsLocalizations.localizationGerman')
            ->with([
                'category.categoryLocalizationGerman.localizationGerman',
                'newsLocalizationsGerman.localizationGerman.language',
                'newsLocalizationsGerman.localizationGerman.contentType'
            ])->get();
//        dump('$newsRaw',$newsRaw);
        foreach($newsRaw as $news) {
//            dd($news);

            $newsArray['id']    = $news->id;
            $newsArray['start'] = $news->start;
            $newsArray['end']   = $news->end;
            foreach($news->newsLocalizationsGerman as $item) {
//                dump('$item',$item);
//                dump('$news',$news);

//                dd( $news->category->categoryLocalizationGerman);

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
//        dump($postNews);
//        dd('HIIERR');
        return $this->toObject($postNews);
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

    public function single($id) {
        $newsRaw = News::with([
            'newsLocalizations.localization.language',
            'newsLocalizations.localization.contentType',
            'image'
        ])->whereId($id)->first();

//        dump($newsRaw->newsLocalizations);

        $news['id']    = $newsRaw->id;
        $news['start'] = $newsRaw->start ?? null;
        $news['end']   = $newsRaw->end ?? null;
        if($newsRaw->image != null) {

            $news['image_id']   = $newsRaw->image->id ?? null;
            $news['image_id']   = $newsRaw->image->id ?? null;
            $news['image_path'] = $newsRaw->image->path ?? null;
        }

        foreach($newsRaw->newsLocalizations as $item) {
//            dump($item->localization->contentType->label);
            $news['localizations'][$item->localization->language->label][$item->localization->contentType->label] = [
                'id'              => $item->id,
                'label'           => $item->localization->label,
                'iso_code'        => $item->localization->language->iso_code,
                'category_id'     => $newsRaw->category_id,
                'localization_id' => $item->localization->id,
                'content_type_id' => $item->localization->content_type_id,
                'language_id'     => $item->localization->language_id,
            ];
        }
//        dump($news);
//        dd('HIIIERRR');
        return $news;
    }

    public function singleRaw($id = null) {
        return News::with([
            'newsLocalizations.localization.language',
            'newsLocalizations.localization.contentType'
        ])->whereId($id)->first();
    }

    public function delete($id) {
        $news = $this->singleRaw($id);
        foreach($news->newsLocalizations as $newsLocalization) {
            Localization::whereId($newsLocalization->localization->id)->delete();
            NewsLocalization::whereId($newsLocalization->id)->delete();
        }
        $news->delete();
    }

    public function toObject($array) {
        return json_decode(json_encode($array));
    }
}