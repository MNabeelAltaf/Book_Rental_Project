<?php

namespace App\Http\Controllers;

use App\Models\books_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class home extends Controller
{
    function homeView()
    {
        try {
            // $books = books_table::paginate(20); 
            $books = DB::table('books_table')->paginate(20,['*'],'p');
            return view('home', ['books' => $books]);
        } catch (\Throwable $th) {
            // error occured here
            return view('home');
        }
    }
}
