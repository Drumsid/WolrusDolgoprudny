<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Bible_quote;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $categories = Category::all();
        $posts = Post::latest()->approved()->published()->paginate(6);
        $bibleQuote = Bible_quote::all()->random();
        return view('welcome', compact('categories', 'posts', 'bibleQuote'));
    }

    public function test()
    {
        return view('test');
    }

    public function feedback(Request $request)
    {
        $this->validate($request, [
            'test' => 'required'
        ]);
        $test = $request->test;
        mail('den-sidnay@yandex.ru', 'My Subject', $test);
        return redirect()->back()->with('successMsg', 'Email send!!!');
    }
}
