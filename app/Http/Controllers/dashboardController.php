<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
 


class dashboardController extends Controller
{


	public function getDashboard()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard', ['posts' => $posts]);
    }

    public function getDashboardUsers()
    {
        $userVar = User::orderBy('created_at', 'desc')->get();
        return view('dashboardUser', ['userVar' => $userVar]);
    }
    //


    public function UserDeleteUser($id)
    {
        $User = User::where('id', $id)->first();

        /*
        if (Auth::user() != $User->user) {
            return redirect()->back();
        }

        */

        
        $User->delete();
        return redirect()->route('dashboardUser')->with(['message' => 'Successfully deleted user!']);
    }

    public function UserEditUser(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);
        $post = Post::find($request['postId']);
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $post->body = $request['body'];
        $post->update();
        return response()->json(['new_body' => $post->body], 200);
    }



    public function approveUser($User_id)
    {
 
        $User = User::where('id', $User_id)->first();

 
        $User->user_status =1;
        $User->update();
        return redirect()->back();

        //return response()->json(['new_body' => $post->body], 200);
    }

   public function disapproveUser($User_id)
    {
 
        $User = User::where('id', $User_id)->first();

 
        $User->user_status =0;
        $User->update();
        return redirect()->back();

        //return response()->json(['new_body' => $post->body], 200);
    }



}
