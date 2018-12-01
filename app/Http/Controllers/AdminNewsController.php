<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class AdminNewsController extends Controller
{

    /**
     * Display a news of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $news = News::orderBy('id', 'asc')->paginate(10);
        return view('admin.news.news')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.add_news');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
         ]);

         $news = new News;

         $news->title = $request->input('title');
         $news->content = $request->input('content');

         $news->save();

         return redirect('admin/news')->with('SUCCESS', 'News is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);

        return view('admin.news.view_news')->with('news', $news);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);

        return view ('admin.news.edit_news')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);

        $news->title = $request->input('title');
        $news->content = $request->input('content');

        $news->save();

        return redirect ('/admin/view-news/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        $news->delete();

        return redirect('/admin/news')->with('success', 'News is deleted.');
    }
}
