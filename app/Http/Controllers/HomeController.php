<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Todo;

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

    public function user_details($id){
        $current_user = User::find($id)->load('toDos');
        return view('user_details',compact('current_user'));
    }

    public function store_user_todo(Request $request){
        $store_new_todo = new Todo;
        $store_new_todo->todos = $request->activity;
        $store_new_todo->user_id = $request->current_user_id;
        $store_new_todo->save();
        return redirect()->back();
    }

    public function delete_user_todo($id){
        $todo_delete = Todo::find($id);
        $todo_delete->delete();
        return redirect()->back();
    }
}
