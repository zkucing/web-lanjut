<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;//Import model user
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function tampil(){
        $data_user = User::all();
        return view("tampil-user")
        ->with("data_user", $data_user);
    }

    public function formInput(){ // hanya tampilan form
        return view("form");
    }

    public function formEdit($id){
        return view("form-update")->with("id", $id);
    }
    public function simpan(UserRequest $request){
        $user = new User();
        $user->name     = $request->get("nama");
        $user->username = $request->get("username");
        $user->password = $request->get("password");
        $user->level    = $request->get("level");
        $user->save();

        return redirect(route("user_all"));
        // return "Data Telah Disimpan";
    }

    public function update(UserRequest $request, $id){
        $user = User::find($id);
        $user->name     = $request->get("nama");
        $user->username = $request->get("username");
        $user->password = $request->get("password");
        $user->level    = $request->get("level");
        $user->save();

        return redirect(route("user_all"));
        // return "Data Telah Disimpan";
    }

    public function hapus($id) {
        User::destroy($id);
        return redirect(route("user_all"));
    }

    public function show($id){
        $data_user = User::find($id);
        return view (".show")
        ->with("data_user",$data_user);
    }
}