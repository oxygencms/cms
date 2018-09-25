<?php

namespace App\Http\Controllers;

use App\Models\Page;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $page = Page::bySlug('/')->first();

        return view("pages.$page->template", compact('page'));
    }
}
