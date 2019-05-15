<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function show(){
        $data = User::all();
        return view('userlist')->with('users',$data);
    }
}
