<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class HttpClientController extends Controller
{
    public function simpleGet()
    {
        try {
            $response = Http::get('{API URL}');
            $response->throw();

            $str = $response->body();
            $arr = $response->json();

            dump($str);
            dd($arr);
        } catch (RequestException $e) {
            //
        }
    }
}
