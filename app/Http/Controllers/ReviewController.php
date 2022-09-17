<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     return view('review.index');
    // }

    // public function create()
    // {
    //     return view('review.create');
    // }

    public function review_store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required',
        ]);
        $user = DB::table('users')->where('id', Auth::user()->id)->first();
        if ($user->id == $request->id_user) {
            $review = new review;
            $review->id_user = $request->id_user;
            $review->id_service = $request->id_service;
            $review->text = $request->text;
            // dd($review);
            $review->save();
            return redirect()->route('service-detail', $request->id_service)->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('service-detail', $request->id_service)->with('error', 'Data gagal ditambahkan');
        }
    }
}
