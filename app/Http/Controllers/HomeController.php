<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function home()
    {
        if(Auth::check()) {
            return view('admin.dashboard.index');
        }
        $news = NewsModel::where('is_active', true)->orderBy('created_at', 'desc')->get();
        $mainNews = $news->first();
        $news = $news->skip(1);
        $data = [
            'mainNews' => $mainNews,
            'news' => $news
        ];
        return view('landing.index', $data);
    }

    public function detail($id){
        $news = NewsModel::findOrFail($id);
        if(!$news->is_active) {
            return redirect()->route('home');
        }
        return view('landing.detail', compact('news'));
    }


    public function dashboard()
    {
        return view('admin.dashboard.index');
    }
}
