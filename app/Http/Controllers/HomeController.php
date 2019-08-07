<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SellItem;

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
        return view('home');
    }

    public function getProfile(){
      $allusers = User::all();


      // return $allusers;
      return view('usersss', [
        'userssss' => $allusers,
        'title' => 'Ni list semua user',
      ]);
    }

    public function listItems(){
      $itemss = SellItem::all();
      return view('itemlist', [
        'userssss' => $itemss,
        'title' => 'Ni list semua item',
      ]);
    }

    public function addItem(Request $req){

      // dd($req->all());

      $satuvar = new SellItem;
      $satuvar->product_name = $req->name;
      $satuvar->save();

      return redirect()->route('additem', [
        'alertss' => 'dah masuk ' . $req->name
      ]);



      // return "ni lepas submit";
    }

    public function showAddItemForm(Request $req){



      if($req->filled('alertss')){
        return view('addmerch', ['alert' => $req->alertss]);
      } else {
        return view('addmerch');
      }

    }

    public function showItemDetail(Request $req){

      return view('itemdetail');
    }


}
