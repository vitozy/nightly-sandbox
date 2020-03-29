<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class FluentStringController extends Controller {

    public function title() {
        $string = "    teszt cím      ";

        $native = ucwords(trim($string));
        dump($native);

        $fluent = (string)Str::of($string)
            ->trim()
            ->title();

        dump($fluent);
    }

    public function split() {
        $string = "egy kettő három";

        $native = explode(";", str_replace(" ", ";", ucwords($string)));
        dump($native);

        $fluent = Str::of($string)
            ->title()
            ->replace(' ', ';')
            ->explode(';');

        dump($fluent);
    }

    public function start() {
        $string = "world";

        $native = ucwords("hello " . $string);
        dump($native);

        $fluent = (string)Str::of($string)
            ->start("hello ")
            ->title();

        dump($fluent);
    }

    public function after() {
        $string = "N#5642-5565-5421";

        $native = explode('-', mb_substr($string, 2));
        dump($native);

        $fluent = Str::of($string)
            ->after("N#")
            ->explode("-");

        dump($fluent);
    }

}
