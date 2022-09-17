<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $dates = Carbon::createFromFormat('Y-m-d', $transaction_details->pluck('DATE(created_at)'))->isoFormat('D MMMM YYYY');
        // dd($labels,$data,$dates);
            // return Carbon::parse($item->created_at)->format('d-m-Y');
            // Carbon::setLocale('id');
            // return Carbon::parse($item->created_at)->format('d M Y');
            // return Carbon::createFromFormat('Y-m-d', $item->create_at)->isoFormat('D MMMM YYYY');

        // dd($labels,$data,$dates);
        // $datas1 = $data1->values()->map(function ($item) {
        //     return $item->gross_amount;
        // });
        // // dd($datas1);
        // $data2 = transaction_detail::select('gross_amount','id_service',DB::raw('DATE(created_at)'))
        // ->orderBy('created_at','asc')
        //     ->where("id_service", "=", "2")
        //     ->get();
        // $datas2 = $data2->values()->map(function ($item) {
        //     return $item->gross_amount;
        // });

        // $data3 = transaction_detail::select('gross_amount','id_service',DB::raw('DATE(created_at)'))
        // ->orderBy('created_at','asc')
        //     ->where("id_service", "=", "3")
        //     ->get();
        // $datas3 = $data3->values()->map(function ($item) {
        //     return $item->gross_amount;
        // });

        // $data4 = transaction_detail::select('gross_amount','id_service',DB::raw('DATE(created_at)'))
        // ->orderBy('created_at','asc')
        //     ->where("id_service", "=", "4")
        //     ->get();

        // if($labels->count() > 0){
        //     $labels = $labels->toArray();
        //     $datas1 = $datas1->toArray();
        //     $datas2 = $datas2->toArray();
        //     $datas3 = $datas3->toArray();
        //     $datas4 = $data4->values()->map(function ($item) {
        //         return $item->gross_amount;
        //     });
        // }
        // dd($labels,$datas1,$datas2,$datas3,$datas4);
        // // $datas4 = $data4->values()->map(function ($item) {
        // //     return $item->gross_amount;
        // // });

        // $data5 = transaction_detail::select('gross_amount','id_service',DB::raw('DATE(created_at)'))
        // ->orderBy('created_at','asc')
        //     ->where("id_service", "=", "5")
        //     ->get();
        // $datas5 = $data5->values()->map(function ($item) {
        //     return $item->gross_amount;
        // });

        // $data6 = transaction_detail::select('gross_amount','id_service',DB::raw('DATE(created_at)'))
        // ->orderBy('created_at','asc')
        //     ->where("id_service", "=", "6")
        //     ->get();
        // $datas6 = $data6->values()->map(function ($item) {
        //     return $item->gross_amount;
        // });

                    // [
                    //     "label" => "My 2 dataset",
                    //     'backgroundColor' => "rgba(207, 215, 67, 0.8)",
                    //     'borderColor' => "rgba(242, 255, 0, 0.8)",
                    //     "pointBorderColor" => "rgba(242, 255, 0, 0.8)",
                    //     "pointBackgroundColor" => "rgba(242, 255, 0, 0.8)",
                    //     "pointHoverBackgroundColor" => "#fff",
                    //     "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    //     'data' => $datas2->toArray(),
                    // ],
                    // [
                    //     "label" => "My 3 dataset",
                    //     'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    //     'borderColor' => "rgba(38, 185, 154, 0.7)",
                    //     "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    //     "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    //     "pointHoverBackgroundColor" => "#fff",
                    //     "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    //     'data' => $datas3->toArray(),
                    // ],
                    // [
                    //     "label" => "My 4 dataset",
                    //     'backgroundColor' => "rgba(255, 193, 7, 0.8)",
                    //     'borderColor' => "rgba(255, 193, 7, 0.8)",
                    //     "pointBorderColor" => "rgba(255, 193, 7, 0.8)",
                    //     "pointBackgroundColor" => "rgba(255, 193, 7, 0.8)",
                    //     "pointHoverBackgroundColor" => "#fff",
                    //     "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    //     'data' => $datas4->toArray(),
                    // ],
                    // [
                    //     "label" => "My 5 dataset",
                    //     'backgroundColor' => "rgba(77, 195, 68, 0.8)",
                    //     'borderColor' => "rgba(19, 255, 0, 0.8)",
                    //     "pointBorderColor" => "rgba(19, 255, 0, 0.8)",
                    //     "pointBackgroundColor" => "rgba(19, 255, 0, 0.8)",
                    //     "pointHoverBackgroundColor" => "#fff",
                    //     "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    //     'data' => $datas5->toArray(),
                    // ],
                    // [
                    //     "label" => "My 6 dataset",
                    //     'backgroundColor' => "rgba(168, 51, 172, 0.8)",
                    //     'borderColor' => "rgba(247, 0, 255, 0.8)",
                    //     "pointBorderColor" => "rgba(247, 0, 255, 0.8)",
                    //     "pointBackgroundColor" => "rgba(247, 0, 255, 0.8)",
                    //     "pointHoverBackgroundColor" => "#fff",
                    //     "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    //     'data' => $datas6->toArray(),
                    // ],
                // ])
                // ->options([]);

            return view('admin.home');
    }

    public function profile()
    {
        return view('admin.profil');
    }

    public function news()
    {
        return view('admin.berita');
    }

    public function portfolio()
    {
        return view('admin.portofolio');
    }

    public function services()
    {
        return view('admin.layanan');
    }

    public function order()
    {
        return view('admin.pesanan');
    }
}
