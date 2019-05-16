<?php

namespace App\Http\Controllers;

use App\Friend;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

    public function account(){
        return view('account',['user' => Auth::user()]);
    }

    public function SaveAccount(Request $request){
        $this->validate($request,[
            'name' => 'required|max:99'
        ]);

        $user = Auth::user();
        $user->name = $request['name'];
        $user->update();
        $file = $request->file('image');
        $filename = $request['name'] . '-' . $user->id .'.jpg';
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }
        return redirect()->route('account');
    }
    public function getUserImage($filename){
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
}

