<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LedModel;
use App\Models\RfidModel;
use App\Models\TapModel;
use App\Models\AbsenModel;
use App\Models\User;
use App\Models\Pengaturan;
use Auth;
use Carbon\Carbon;

class AjaxController extends Controller
{
    function update()
    {
        $led = LedModel::find(1);
        return response()->json($led);
    }

    public function putih()
    {
        $led = LedModel::find(1);
        if($led->led_putih == "hidup"){
            $input['led_putih'] = "mati";
            $ledt = "mati";
        }else{
            $input['led_putih'] = "hidup";
            $ledt = "hidup";
        }

        $led->update($input);
        return response()->json(["message"=>"sukses","led"=> $ledt]);
       
    }

    public function merah()
    {
        $led = LedModel::find(1);
        if($led->led_merah == "hidup"){
            $input['led_merah'] = "mati";
            $ledt = "mati";
        }else{
            $input['led_merah'] = "hidup";
            $ledt = "hidup";
        }

        $led->update($input);
        return response()->json(["message"=>"sukses","led"=> $ledt]);
       
    }

    public function rfid()
    {
       $cektap = TapModel::all()->first();
       if($cektap->status == "aktif"){
        return $this->kirim();
       }else{
                $absen = Pengaturan::all()->first();
                if($absen->masuk == "aktif"){
                return $this->setMasuk();
                return response()->json(["message"=>"mulai absen"]);
            } else{
                return $this->setPulang();
                return response()->json(["message"=>"mulai absen"]);
            }
       }
        
    }

    public function setMasuk()
    {
        date_default_timezone_set('Asia/Jakarta');
        $absen = AbsenModel::where('rfid',Request()->input('rfid'))->whereDate('created_at', Carbon::today());
        $input['status_hadir'] = 'hadir';
        $input['check_in'] = Carbon::now();  

        $absen->update($input);
      
            return response()->json(["message"=>"sukses"]);
        
    }

    public function setPulang()
    {
        date_default_timezone_set('Asia/Jakarta');
        $absen = AbsenModel::where('rfid',Request()->input('rfid'))->whereDate('created_at', Carbon::today());
        $input['status_pulang'] = 'hadir';
        $input['check_out'] = Carbon::now();  

        $absen->update($input);
      
            return response()->json(["message"=>"sukses"]);
       
        
    }

    private function kirim()
    {
        $input['uid'] = Request()->input('rfid');
        $rfid = rfidModel::where('uid',$input['uid'])->get();
        if($rfid->count() > 0)
        {
            return response()->json(["message"=>"sukses","rfid"=>$rpid->uid]);
        }else{
            $data = RfidModel::create($input);
            return response()->json(["message"=>"sukses"]);
        }
    }


    public function getrfid()
    {
        $time = [Carbon::now()->subHours(24)->toDateTimeString(), Carbon::now()->toDateTimeString()];
        $rfid = rfidModel::whereBetween('created_at', $time)->orderBy('created_at','desc')->first();
       
            return response()->json(["message"=>"sukses","rfid"=> $rfid->uid]);
       
            
        
        
    }
}
