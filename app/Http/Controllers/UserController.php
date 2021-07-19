<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasRole;
use App\Models\Role;
use App\Models\User;
use App\Models\ProdiModel;
use App\Models\RfidModel;
use App\Http\Requests\StoreUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = HasRole::with('users','role')->get();
        return view('admin.user.index',compact('data'));
    }

    public function create(Request $request)
    {
        $data = Role::all();
        $prodi = ProdiModel::all();
        $cardid = $request->input('rfid');
        $rfid = RfidModel::all();
        return view('admin.user.create',compact('data','cardid','prodi','rfid'));
    }

    public function store(StoreUser $request)
    {
        $input = $request->all();
        DB::beginTransaction();

        try {
            $input['password'] = Hash::make($input['password']);
           
           
            $data = User::create($input);
            $data->assignRole($input['role']);

            DB::commit();
       
            return redirect(route('user'))->with('success', 'User berhasil ditambahkan');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan, silahkan coba lagi nanti');
        }


    }


    public function edit($id)
    {
        $user = User::select('users.*', 'roles.name as role_name')->leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')->find($id);
        if (!$user){
            return redirect(route('user'))->with('error', 'users tidak di temukan !');
        }
        $data = Role::all();
        return view('admin.user.edit',compact('data','user'));
    }


    public function editprofile()
    {
        $
        $user = User::select('users.*', 'roles.name as role_name')->leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')->find($id);
        if (!$user){
            return redirect(route('user'))->with('error', 'users tidak di temukan !');
        }
        $data = Role::all();
        return view('admin.user.edit',compact('data','user'));
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user = User::find($id);
        $input['password'] = Hash::make($input['password']);

        if($request->password == null){
            unset($input['password']);
        }
      
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($input['role']);
       
        return redirect(route('admin.user.edit'))->with('success', 'Users berhasil diperbarui');
    }
}
