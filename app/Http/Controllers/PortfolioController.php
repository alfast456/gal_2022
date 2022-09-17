<?php

namespace App\Http\Controllers;
use App\Models\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('portfolio');
    }

    public function index()
    {
        $portfolio = portfolio::all();
        return view('admin.portofolio', compact('portfolio'));
    }

    public function portfolio(){
        $portfolio = portfolio::all();
        return view('content.portfolio', compact('portfolio'));
    }
    public function portfolio_store(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);
        $imageName = $request->thumbnail->getClientOriginalName();
        $request->thumbnail->move(public_path('images/portfolio'), $imageName);
        $portfolio = new portfolio;
        $portfolio->thumbnail = $imageName;
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->save();
        if ($portfolio) {
            return redirect()->route('admin-portfolio')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('admin-portfolio')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function portfolio_edit(Request $request, $id)
    {
        $where = array('id_portfolio' => $id);
        $portfolio = portfolio::where($where)->first();
        return view('admin.portofolio', compact('portfolio'));
    }

    public function portfolio_update(Request $request, $id)
    {
        $this->validate($request, [
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);
        // $img = storage_path('app/public/images/'.$request->thumbnail);
        // Storage::delete($img);
        $imageName = $request->thumbnail->getClientOriginalName();
        $request->thumbnail->move(public_path('images/portfolio'), $imageName);
        $where = array('id_portfolio' => $id);
        $portfolio = portfolio::where($where)->first();
        $portfolio->thumbnail = $imageName;
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->update();
        if ($portfolio) {
            return redirect()->route('admin-portfolio')->with('success', 'Data berhasil diubah');
        } else {
            return redirect()->route('admin-portfolio')->with('error', 'Data gagal diubah');
        }
    }


    public function portfolio_delete($id)
    {
        $where = array('id_portfolio' => $id);
        $portfolio = portfolio::where($where)->first();
        $portfolio->delete();
        if ($portfolio) {
            return redirect()->route('admin-portfolio')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('admin-portfolio')->with('error', 'Data gagal dihapus');
        }
    }

}
