<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Category;
use App\Models\News;
use App\Http\Requests\NewsRequest;

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
        $detailNews = News::where('id', $req->id)->first();

        return view('page.show', compact('detailNews'));
    }

    public function getLoai($type)
    {
        $tinTheoloai = News::where('category_id', $type)->get();

        return view('page.list_theoloai', compact('tinTheoloai'));
    }

    public function getCreate()
    {
        return view('page.create');
    }

    public function postCreate(NewsRequest $req)
    {
        $tin = new News();
        $tin->category_id = $req->category_id;
        $tin->title = $req->title;
        $tin->body = $req->body;
        $tin->save();     

        return redirect()->route('trang-chu');
    }

    public function getEdit(Request $req){
        $newsEdit = News::where('id', $req->id)->first();

        return view('page.edit', compact('newsEdit'));
    }

    public function postUpdate(NewsRequest $req, $id)
    {
        $data = News::find($id);      
        $data->title = $req->title;
        $data->body = $req->body;
        $data->save();

        return redirect()->route('trang-chu');
    }

    public function getDelete(Request $req){
        $newsDel = News::where('id', $req->id)->first();
        $newsDel->delete();

        return redirect()->route('trang-chu');
    }
}
