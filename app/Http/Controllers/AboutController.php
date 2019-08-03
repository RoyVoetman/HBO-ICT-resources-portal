<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke() {
        return view('about');
    }
}
