<?php

namespace App\Http\Controllers;
use App\Models\RfidModel;
use App\Models\TapModel;
use Illuminate\Http\Request;

class RfidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RfidModel::all();
        $tap = TapModel::where('id_tap',1)->first();
        return view('admin.rfid.index',compact('data','tap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tap()
    {
        $tap = TapModel::where('id_tap',1);
        $cek = TapModel::where('id_tap',1)->first();
        if($cek->status == 'aktif'){
        $input['status'] = "nonaktif";
        }else{
            $input['status'] = "aktif";
        }
        $tap->update($input);
        return redirect(route('rfid'))->with('success', 'update status tap');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
