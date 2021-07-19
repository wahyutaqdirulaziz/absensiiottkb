<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsenModel;
use App\Models\User;
use App\Models\Pengaturan;
use Auth;
use Carbon\Carbon;


class AbsenController extends Controller
{
    public function set()
    {
        $input['rfid'] = Auth::user()->rfid;
        $data = AbsenModel::create($input);
        return redirect(route('home'))->with('success', 'User berhasil ditambahkan');
    }
    public function setMasuk()
    {
        date_default_timezone_set('Asia/Jakarta');
        $rfid = Auth::user()->rfid;
        $absen = AbsenModel::where('rfid',$rfid)->whereDate('created_at', Carbon::today());
        $input['status_hadir'] = 'hadir';
        $input['check_in'] = Carbon::now();  
        $absen->update($input);
        return redirect(route('home'))->with('success', 'User berhasil Absen Masuk');
    }
    public function setPulang()
    {
        
        $rfid = Auth::user()->rfid;
        $absen = AbsenModel::where('rfid',$rfid)->whereDate('created_at', Carbon::today());
        $input['status_pulang'] = 'hadir';
        $input['check_out'] = Carbon::now();    
        $absen->update($input);
        return redirect(route('home'))->with('success', 'User berhasil Absen Masuk');
    }

    public function setupabsen()
    {
        $user = User::all();
        foreach($user as $u):
            $input['rfid'] = $u->rfid;
            $data = AbsenModel::create($input);
        endforeach;    
        return redirect(route('home'))->with('success', 'User berhasil ditambahkan');
    }



    public function aktifkanmasuk()
    {
        $absen = Pengaturan::all()->first();
        $pengaturan = Pengaturan::where('id',5);
        if($absen->masuk == "aktif" ){
        $input['masuk'] = 'nonaktif';
        }else{
        $input['masuk'] = 'aktif';
        }
        $pengaturan->update($input);
        return redirect(route('home'))->with('success', 'Absensi Berhasil di update');
    }



    public function aktifkanpulang()
    {
        $absen = Pengaturan::all()->first();
        $pengaturan = Pengaturan::where('id',5);
        if($absen->pulang == "aktif" ){
        $input['pulang'] = 'nonaktif';
        }else{
        $input['pulang'] = 'aktif';
        }
        $pengaturan->update($input);
        return redirect(route('home'))->with('success', 'Absensi Berhasil di update');
    }
}
