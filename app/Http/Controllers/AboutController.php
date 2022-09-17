<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\about;
use App\Models\staff;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('about');
    }

    public function index()
    {
        $about = about::all();
        return view('admin.tentang', compact('about'));
    }

    public function about()
    {
        $about = about::all();
        $staff = staff::all();
        return view('content.about', compact('about', 'staff'));
    }

    // public function about_detail(Request $request, $id)
    // {
    //     $where = array('id_about' => $id);
    //     $about = about::findOrFail($where);
    //     return view('content.about_detail', compact('about'));
    // }

    public function about_store(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_content' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);
        $imageName = $request->thumbnail->getClientOriginalName();;
        $request->thumbnail->move(public_path('images/about'), $imageName);
        $about = new about;
        $about->thumbnail = $imageName;
        $about->about_content = $request->about_content;
        $about->visi = $request->visi;
        $about->misi = $request->misi;
        $about->save();
        if ($about) {
            return redirect()->route('admin-about')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('admin-about')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function about_edit(Request $request, $id)
    {
        $where = array('id_about' => $id);
        $about = about::where($where)->first();
        return view('admin.about', compact('about'));
    }

    public function about_update(Request $request, $id)
    {
        $this->validate($request, [
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_content' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);
        $imageName = $request->thumbnail->getClientOriginalName();;
        $request->thumbnail->move(public_path('images/about'), $imageName);
        $where = array('id_about' => $id);
        $about = about::where($where)->first();
        $about->thumbnail = $imageName;
        $about->about_content = $request->about_content;
        $about->visi = $request->visi;
        $about->misi = $request->misi;
        $about->save();
        if ($about) {
            return redirect()->route('admin-about')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('admin-about')->with('error', 'Data gagal ditambahkan');
        }
    }
}
