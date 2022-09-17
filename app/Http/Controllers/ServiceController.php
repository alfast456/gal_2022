<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('service');
    }
    public function index()
    {
        $service = service::all();
        return view('admin.layanan', compact('service'));
    }
    public function service(){
        $service = service::all();
        return view('content.services', compact('service'));
    }

    public function service_detail(Request $request, $id)
    {
        $where = array('id_service' => $id);
        $service = service::findOrFail($where);
        $result = DB::table('reviews')->join('users', 'reviews.id_user', "=", "users.id")->where("reviews.id_service","=", $id)->orderBy('reviews.created_at','DESC')->limit(3)->get();
        // dd($result);
        return view('content.services_detail', compact('service','result'));
    }

    public function service_store(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);
        $imageName = $request->icon->getClientOriginalName();;
        $request->icon->move(public_path('images/service/icon'), $imageName);
        $imageName2 = $request->thumbnail->getClientOriginalName();;
        $request->thumbnail->move(public_path('images/service'), $imageName2);
        $service = new service;
        $service->icon = $imageName;
        $service->title = $request->title;
        $service->thumbnail = $imageName2;
        $service->description = $request->description;
        $service->save();
        if ($service) {
            return redirect()->route('admin-services')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('admin-services')->with('error', 'Data gagal ditambahkan');
        }
    }
    public function service_edit(Request $request, $id)
    {
        $where = array('id_service' => $id);
        $service = service::where($where)->first();
        return view('admin.service', compact('service'));
    }

    public function service_update(Request $request, $id)
    {
        $this->validate($request, [
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);
        $imageName = $request->icon->getClientOriginalName();;
        $request->icon->move(public_path('images/service/icon'), $imageName);
        $imageName2 = $request->thumbnail->getClientOriginalName();;
        $request->thumbnail->move(public_path('images/service'), $imageName2);
        $where = array('id_service' => $id);
        $service = service::where($where)->first();
        $service->icon = $imageName;
        $service->title = $request->title;
        $service->thumbnail = $imageName2;
        $service->description = $request->description;
        $service->save();
        if ($service) {
            return redirect()->route('admin-services')->with('success', 'Data berhasil diubah');
        } else {
            return redirect()->route('admin-services')->with('error', 'Data gagal diubah');
        }
    }

    public function service_delete($id)
    {
        $service = service::find($id);
        $service->delete();
        return redirect()->route('admin-service')->with('success', 'Data berhasil dihapus');
    }
}
