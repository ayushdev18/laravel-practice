<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use App\Models\User;




use Illuminate\Http\Request;

class userController extends Controller
{
    public function userdata()
    {
        $users = User::all();
        return view('user', ['user' => $users]);

        //return response()->json($users);
        //return $users;

    }
}
