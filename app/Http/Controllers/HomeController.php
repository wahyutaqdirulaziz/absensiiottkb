<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsenModel;
use App\Models\Pengaturan;
use App\Models\User;
use App\Models\RfidModel;
use Auth;
use Carbon\Carbon;

class HomeController extends Controller
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
        $rfid = Auth::user()->rfid;
        $waktu_skarang = Carbon::now();
        $absen = Pengaturan::all()->first();
        $batas_hadir = date_create('2021-06-23 15:20:48');
        $user = User::all();
        $rfid = RfidModel::all();
        $cek_absen = AbsenModel::whereDate('created_at', Carbon::today())->get();
        $cek_day = AbsenModel::whereDate('created_at', Carbon::today())->whereNotNull('check_in')->get();
        $cek_user = AbsenModel::where('rfid',Auth::user()->rfid)->whereDate('created_at', Carbon::today())->first();
        
        return view('admin.home.index',compact('cek_absen','waktu_skarang','batas_hadir','absen','cek_user','user','rfid','cek_day'));
    }
}
