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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]{11}$/',
            'msg' => 'required',
            'check' => 'required',
        ]);
        // return dd($request->all());
        if (request('check') && request('check') == 1) {
            $msg = "Сообщения с сайта Слово Жизни Долгопрудный \r\nИмя: " . $request->name . "\r\n" . "Почта: " . $request->email . "\r\n" . "Телефон: " . $request->phone . "\r\n" . "Сообщение: " . $request->msg . "\r\n ";
            mail('den-sidnay@yandex.ru', 'My Subject', $msg);
            return redirect()->back()->with('successMsg', 'Сообщение успешно отправлено!');
        } else {
            return redirect()->back()->with('successErr', 'Сообщение не отправлено!');
        }
    }
}
