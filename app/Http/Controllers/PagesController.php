<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Room;

class PagesController extends Controller
{
    public function index(){
        $pageTitle = "Index";
    	return view('index')->with('pageTitle', $pageTitle);
    }

    public function news(){

        $news = News::orderBy('id', 'desc')->paginate(10);
        return view('news.news')->with('news', $news);
    }

    public function view_news($id){
        $news = News::Find($id);
        return view ('news.show_news')->with('news', $news);
    }

    public function about(){

    	return view('about');
    }

    public function rooms(){

        $rooms = Room::all();
        return view('rooms');
    }

    public function contact(){

    	return view('contact');
    }

    public function dashboard(){

        return view('home');
    }

    public function sidebar () {
        $news = News::latest()->get();
        return view('news.news')->with('news', $news);

        // $latest = News::orderBy('created_at', 'desc');
        // return view('includes.sidebar')->with('latest', $latest);

    }

    // public function sortBy(){
    //     $sortBy = News::orderBy('title', 'desc')->paginate(10);
    //     return view('news.news')->with('title', $sortBy);
    // }
}
