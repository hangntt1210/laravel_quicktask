<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Category;
use App\Models\News;

class HomeController extends Controller
{
    public function changeLanguage($language)
    {
        Session::put('website_language', $language);
        return redirect()->back();
	}

	public function getIndex()
    {
        $list = News::where('id', '<>', 0)->get();
        return view('page.list', compact('list'));
    }

    public function getChitiet(Request $req)
    {
        $detail_news = News::where('id', $req->id)->first();
        return view('page.show', compact('detail_news'));
    }

    public function getLoai($type)
    {
        $tin_theoloai = News::where('category_id', $type)->get();
        return view('page.list_theoloai', compact('tin_theoloai'));
    }

    public function getCreate()
    {
        return view('page.create');
    }

    public function postCreate(Request $req)
    {
        $tin = new News();
        $tin->category_id = $req->category_id;
        $tin->title = $req->title;
        $tin->body = $req->body;
        $tin->save();       
        return redirect()->route('trang-chu');
    }

    public function getEdit(Request $req){
    	$news_edit = News::where('id', $req->id)->first();
        return view('page.edit', compact('news_edit'));
    }

    public function postUpdate(Request $req, $id)
    {
        $data = News::find($id);      
        $data->title = $req->title;
        $data->body = $req->body;
        $data->save();
        return redirect()->route('trang-chu');
    }

    public function getDelete(Request $req){
        $news_del = News::where('id', $req->id)->first();
        $news_del->delete();
        return redirect()->route('trang-chu');
    }
}
