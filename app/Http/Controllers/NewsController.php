<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['news', 'news_detail']);
    }
    public function index()
    {
        $news = news::all();
        return view('admin.berita', compact('news'));
    }
    public function news(){
        $news = news::all();
        return view('content.news', compact('news'));
    }

    public function news_detail(Request $request, $id)
    {
        $where = array('id_news' => $id);
        $news = news::findOrFail($where);
        return view('content.news_detail', compact('news'));
    }

    public function news_store(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);
        $imageName = $request->thumbnail->getClientOriginalName();;
        $request->thumbnail->move(public_path('images/news'), $imageName);
        $news = new news;
        $news->thumbnail = $imageName;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->save();
        if ($news) {
            return redirect()->route('admin-news')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('admin-news')->with('error', 'Data gagal ditambahkan');
        }
    }
    public function news_edit(Request $request, $id)
    {
        $where = array('id_news' => $id);
        $news = news::where($where)->first();
        return view('admin.news', compact('news'));
    }

    public function news_update(Request $request, $id)
    {
        $this->validate($request, [
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);
        // $img = storage_path('app/public/images/'.$request->thumbnail);
        // Storage::delete($img);
        $imageName = $request->thumbnail->getClientOriginalName();
        $request->thumbnail->move(public_path('images/news'), $imageName);
        $where = array('id_news' => $id);
        $news = news::where($where)->first();
        $news->thumbnail = $imageName;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->update();
        if ($news) {
            return redirect()->route('admin-news')->with('success', 'Data berhasil diubah');
        } else {
            return redirect()->route('admin-news')->with('error', 'Data gagal diubah');
        }
    }

    public function news_delete($id)
    {
        $news = news::find($id);
        $news->delete();
        return redirect()->route('admin-news')->with('success', 'Data berhasil dihapus');
    }
}
