<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logout extends Controller
{
    function logout()
    {
        session()->flush();
        return redirect('home')->with(['valid_user'=>'no']);
    }
}
