<?php

namespace App\Http\Controllers;

use Prismic\Api;

class PagesController extends Controller
{

    public function index()
    {
        $url = env('PRISMIC_URL');
        $access_token = env('PRISMIC_TOKEN');
        $api = Api::get($url, $access_token);
        $document = $api->getByUID('page', 'homepage');
        return view('home', ['document' => $document]);
    }


    public function about()
    {
        $url = env('PRISMIC_URL');
        $access_token = env('PRISMIC_TOKEN');
        $api = Api::get($url, $access_token);
        $document = $api->getByUID('page', 'about');
        return view('home', ['document' => $document]);
    }
}
