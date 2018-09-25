<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Venue;

class PageController extends Controller
{
    /**
     * @param Page $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Page $page)
    {
        $data = compact('page');

        switch ($page->template) {
            case 'venues':
                $data['venues'] = Venue::all();
                break;
        }

        return view("pages.$page->template", $data);
    }
}
