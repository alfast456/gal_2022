<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\staff;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('staff');
    }
    public function index()
    {
        $staff = staff::all();
        return view('admin.staff', compact('staff'));
    }
    public function staff(){
        $staff = staff::all();
        return view('content.staff', compact('staff'));
    }
    public function staff_detail(Request $request, $id)
    {
        $where = array('id_staff' => $id);
        $staff = staff::findOrFail($where);
        return view('content.staff_detail', compact('staff'));
    }
    public function staff_store(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'position' => 'required',
            'link_ig' => 'required',
            'link_fb' => 'required',
            'link_twitter' => 'required',
            'link_wa' => 'required',
        ]);
        $imageName = $request->thumbnail->getClientOriginalName();;
        $request->thumbnail->move(public_path('images/staff'), $imageName);
        $staff = new staff;
        $staff->thumbnail = $imageName;
        $staff->name = $request->name;
        $staff->position = $request->position;
        $staff->link_ig = $request->link_ig;
        $staff->link_fb = $request->link_fb;
        $staff->link_twitter = $request->link_twitter;
        $staff->link_wa = $request->link_wa;
        // dd($staff);
        $staff->save();
        if ($staff) {
            return redirect()->route('admin-staff')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('admin-staff')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function staff_edit(Request $request, $id)
    {
        $where = array('id_staff' => $id);
        $staff = staff::where($where)->first();
        return view('admin.staff', compact('staff'));
    }

    public function staff_update(Request $request, $id)
    {
        $this->validate($request, [
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'position' => 'required',
            'link_ig' => 'required',
            'link_fb' => 'required',
            'link_twitter' => 'required',
            'link_wa' => 'required',
        ]);
        $imageName = $request->thumbnail->getClientOriginalName();;
        $request->thumbnail->move(public_path('images/staff'), $imageName);
        $staff = staff::findOrFail($id);
        $staff->thumbnail = $imageName;
        $staff->name = $request->name;
        $staff->position = $request->position;
        $staff->link_ig = $request->link_ig;
        $staff->link_fb = $request->link_fb;
        $staff->link_twitter = $request->link_twitter;
        $staff->link_wa = $request->link_wa;
        $staff->save();
        if ($staff) {
            return redirect()->route('admin-staff')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('admin-staff')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function staff_delete($id)
    {
        $staff = staff::findOrFail($id);
        $staff->delete();
        return redirect()->route('admin-staff')->with('success', 'Data berhasil dihapus');
    }
}
