<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserFollowController extends Controller
{
    public function follow(Request $request)
    {
        Auth::user()->follow($request->follow_id);
        $followings = Auth::user()->followings()->orderBy('created_at', 'desc')->get();
        return $followings;
    }

    public function unfollow(Request $request)
    {
        Auth::user()->unfollow($request->follow_id);
        $followings = Auth::user()->followings()->orderBy('created_at', 'desc')->get();
        return $followings;
    }

    public function myFollowings(Request $request)
    {
        $user = Auth::user();
        $followings = $user->followings()->orderBy('created_at', 'desc')->get();

        // $data = [
        //     'user' => $user,
        //     'users' => $followings,
        // ];

        //$data += $this->counts($user);

        return $followings;
    }

    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->orderBy('created_at', 'desc')->get();

        // $data = [
        //     'user' => $user,
        //     'users' => $followings,
        // ];

        //$data += $this->counts($user);

        return $followings;
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->orderBy('created_at', 'desc')->get();

        $data = [
            'user' => $user,
            'users' => $followers,
        ];

        //$data += $this->counts($user);

        return $followers;
    }
}
