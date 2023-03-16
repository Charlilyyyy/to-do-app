<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $users = User::all();
        return view('home',compact('users'));
    }

    public function add_user(){
        return view('add_user');
    } 

    public function store_user(Request $request){
        $store_new_user = new User;
        $store_new_user->name = $request->name;
        $store_new_user->save();
        return redirect('/')->with('msg', 'User added');
    }
}
