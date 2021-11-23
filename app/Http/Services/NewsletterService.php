<?php

namespace App\Http\Services;

use App\Models\Localization;
use App\Models\Newsletter;
use App\Models\NewsletterLocalization;
use Illuminate\Http\Request;

class NewsletterService
{
    public function insert(Request $request) {
        $postData = $request->all('newsletter')['newsletter'];
//        dump('$postData',$postData);
        $newsletter = Newsletter::updateOrCreate(
            ['id' => $postData['id']],
            ['category_id' => $postData['category_id']]
        );
//        dump('$newsletter',$newsletter);
        foreach($postData['labels'] as $key => $contentType) {
//            dump('$contentType',$contentType);
//            dump('$key',$key);
            foreach($contentType as $localization) {
//            dump('$localization',$localization);
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
//            dump($newsletter->id);

                $newsletterLocalization = NewsletterLocalization::updateOrCreate(
                    ['id' => $localization['newsletter_localization_id']],
                    [
                        'newsletter_id'   => $newsletter->id,
                        'localization_id' => $localizationUpdated->id,
                    ]);
//            dump($newsletterLocalizations);

            }
        }

//        dd('HIIIERRR');

        return $newsletter;
    }

    public function allGerman() {
        $newsletterArray = [];
        $newsletters     = [];
        $newslettersRaw  = Newsletter::has('newsletterLocalizations.localizationGerman')
            ->with([
                'category.categoryLocalizationGerman.localizationGerman',
                'newsletterLocalizationsGerman.localizationGerman.language',
                'newsletterLocalizationsGerman.localizationGerman.contentType'
            ])->get();
//            dd($newslettersRaw);
        foreach($newslettersRaw as $newsletter) {
//                dump($newsletter);

            foreach($newsletter->newsletterLocalizationsGerman as $item) {
//                dump($item);
                $newsletterArray['id']             = $newsletter->id;
                $newsletterArray['category_label'] = $newsletter->id;

                $newsletterArray['localizations'][$item->localizationGerman->contentType->label] = [
                    'id'              => $item->id,
                    'label'           => $item->localizationGerman->label,
                    'category_label'  => $newsletter->category->categoryLocalizationGerman->localizationGerman->label,
                    'last_send'       => $newsletter->last_send,
                    'iso_code'        => $item->localizationGerman->language->iso_code,
                    'category_id'     => $newsletter->category_id,
                    'localization_id' => $item->localizationGerman->id,
                    'content_type_id' => $item->localizationGerman->content_type_id,
                    'language_id'     => $item->localizationGerman->language_id,
                ];

            }
            $newsletters[] = $newsletterArray;
        }
//        dump($newsletters);
//        dd('HIIERR');
        return $newsletters;
    }

    public function newsletterCategories() {
        return Newsletter::whereContext('newsletter')->get();
    }

    public function single($id = null) {
        $newsletterRaw = Newsletter::with([
            'newsletterLocalizations.localization.language',
            'newsletterLocalizations.localization.contentType'
        ])->whereId($id)->first();

//        dump($newsletterRaw);
//        dump($newsletterRaw->newsletterLocalizations);

        $newsletter['id'] = $newsletterRaw->id;
        foreach($newsletterRaw->newsletterLocalizations as $item) {
//            dump($item->localization->contentType->label);


            $newsletter['localizations'][$item->localization->language->label][$item->localization->contentType->label] = [
                'id'              => $item->id,
                'label'           => $item->localization->label,
                'iso_code'        => $item->localization->language->iso_code,
                'category_id'     => $newsletterRaw->category_id,
                'localization_id' => $item->localization->id,
                'content_type_id' => $item->localization->content_type_id,
                'language_id'     => $item->localization->language_id,
            ];
        }

//        dump($newsletter);
//        dd('HIIIERRR');
        return $this->toObject($newsletter);
    }

    public function singleRaw($id = null) {
        return Newsletter::with([
            'newsletterLocalizations.localization.language',
            'newsletterLocalizations.localization.contentType'
        ])->whereId($id)->first();
    }

    public function delete($id) {
        $newsletter = $this->singleRaw($id);
//        dd($newsletter);
        foreach($newsletter->newsletterLocalizations as $newsletterLocalization) {
            Localization::whereId($newsletterLocalization->localization->id)->delete();
            NewsletterLocalization::whereId($newsletterLocalization->id)->delete();
        }
        $newsletter->delete();
    }

    public function toObject($array) {
        return json_decode(json_encode($array));
    }
}