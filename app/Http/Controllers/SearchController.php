<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search_news (Request $request){
        $search = $request->get('news');
        $news = DB::table('news')->where('title', 'like', '%' . $search . '%')->paginate(5);
        return view ('news.news')->with('news', $news);
       } 

    public function admin_search_news (Request $request){
        $search = $request->get('news');
        $news = DB::table('news')->where('title', 'like', '%' . $search . '%')->paginate(5);
        return view ('admin.news.news')->with('news', $news);
   }

    public function admin_search_users (Request $request){
        $search = $request->get('users');
        $users = DB::table('users')->where('name', 'like', '%' . $search . '%', 'or', 'email', 'like', '%' . $search . '%')->paginate(5);
        return view ('admin.users.users')->with('users', $users);
   } 
    
}
    
