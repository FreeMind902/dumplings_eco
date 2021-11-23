<?php

namespace App\Http\Controllers;

use App\Http\Services\FoodlistCategoryService;
use App\Http\Services\ContentTypeService;
use App\Http\Services\FoodlistEntryService;
use App\Http\Services\LanguageService;
use App\Http\Services\StoryService;
use App\Http\Services\FoodlistSortingService;
use App\Http\Services\ImageService;
use App\Http\Services\NewsletterService;
use App\Http\Services\NewsService;
use App\Http\Services\SubscriberService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public $contentTypeService;
    public $foodlistCategoryService;
    public $foodlistSubCategoryService;
    public $foodlistService;
    public $foodlistSortingService;
    public $imageService;
    public $languageService;
    public $newsService;
    public $newsletterService;
    public $subscriberService;
    public $storyService;

    public function __construct() {
        $this->foodlistCategoryService = new FoodlistCategoryService();
        $this->imageService            = new ImageService();
        $this->languageService         = new LanguageService();
        $this->newsService             = new NewsService();
        $this->newsletterService       = new NewsletterService();
        $this->subscriberService       = new SubscriberService();
        $this->storyService            = new storyService();
    }

    public function removeImage($id) {
        $this->imageService->delete($id);

        return redirect()->back();
    }

    public function toObject($array) {
        return json_decode(json_encode($array));
    }
}
