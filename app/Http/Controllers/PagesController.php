<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel';

        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About Us';

        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'Backend', 'SEO'],
        );

        return view('pages.services')->with($data);
    }
}
