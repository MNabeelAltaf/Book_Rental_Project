<?php

namespace App\Http\Controllers;

use App\Models\book_rented;
use App\Models\users;
use Illuminate\Http\Request;


class profile extends Controller
{
    function profileView(Request $req)
    {


        $email = $req->session()->get('email');
        $valid_user = $req->session('valid_user');

        if ($email == null) {
            return view('home');
        }


        try {
            $user = users::where('email', $email)->first();
            $user_image = 'user_dp/' . $user->image_name;
        } catch (\Throwable $th) {
            dd('Error Occured' . $th);
        }

        // fetch data (rented books) from table and show in a profile view

        try {
            $rented_books = book_rented::where('user_email', $email)->get();
        } catch (\Throwable $th) {
            
        }


        return view('profile', ['email' => $email, 'valid_user' => $valid_user, 'user_dp' => $user_image, 'rented_books' => $rented_books]);
    }
}
