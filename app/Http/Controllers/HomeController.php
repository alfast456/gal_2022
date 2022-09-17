<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\service;
use App\Models\about;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $service = service::all();
        $about = about::all();
        return view('content.home', compact('service', 'about'));
    }

    public function adminView()
    {
        return view('admin-view');
    }
    public function myaccount()
    {
        return view('content.myaccount');
    }
}
