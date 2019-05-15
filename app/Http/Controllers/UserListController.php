<?php

namespace App\Http\Controllers;

use App\Friend;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserListController extends Controller
{
    public function show(){
        $data = User::all();
        $user_id = Auth::id();

        return view('userlist')->with('users',$data);
    }

    public function add($id){
        $friend = new Friend();
        $friend->user_id = Auth::id();
        $friend->friend_id = $id;
        $friend->save();



        return redirect()->route('chat.index');
    }
}

