<?php

namespace App\Http\Services;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberService
{
    public function insert(Request $request) {
        $postData = $request->all('subscriber')['subscriber'];
        if(!isset($postData['is_active'])) {
            $postData['is_active'] = 0;
        }
        $subscriber = Subscriber::updateOrCreate(

            ['id' => $postData['id']],

            $postData,
        );
//    dd($subscriber);
        return $subscriber;
    }

    public function all() {
        return Subscriber::all();
    }

    public function single($id) {
        return Subscriber::whereId($id)->first();
    }

    public function delete($id) {
        return Subscriber::whereId($id)->delete();
    }
}