<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserMgmtController extends Controller
{

  public function showEditUser(Request $req){

    $thatuser = User::find($req->user_id);


    // return $thatuser;


    // get -> return array of object / model
    // first -> return object / model

    return view('admin.edituser', ['userinfo' => $thatuser]);
  }

  public function doEditUser(Request $req){

    // dd($req->all());

    $thatuser = User::find($req->user_id);
    $thatuser->name = $req->name;
    $thatuser->email = $req->email;
    $thatuser->save();

    return redirect()->route('users');

  }
}
