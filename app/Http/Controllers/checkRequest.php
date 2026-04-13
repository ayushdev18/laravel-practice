<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkRequest
{
    function checkrequest(Request $request)
    {
        // echo "request method is:" . $request->method();
        $data = $request->method();
        return view('checkrequest', ['user' => $data]);
    }
}
