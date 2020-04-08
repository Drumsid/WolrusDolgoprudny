<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function church()
    {
        return view('pages.church');
    }

    public function pastor()
    {
        return view('pages.pastor');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }
}
