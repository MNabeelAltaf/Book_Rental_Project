<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class filter extends Controller
{
    function apply_filter(Request $req)
    {

        $book_title = $req->input('book_title') ?? null;
        $author = $req->input('author') ?? null;
        $publisher = $req->input('publisher') ?? null;
        $published_date = $req->input('published_date') ?? null;


        $query = DB::table('books_table');

        if (!empty($book_title)) {
            $query->where('title', 'LIKE', "%$book_title%");
        }

        if (!empty($author)) {
            $query->where('author', 'LIKE', "%$author%");
        }

        if (!empty($publisher)) {
            $query->where('publisher', 'LIKE', "%$publisher%");
        }

        if (!empty($published_date)) {
            $query->where('published_date', '=', $published_date);
        }

        $filteredBooks = $query->paginate(20, ['*'], 'p');
        $filter_applied = 'yes';

        return view('home', ['books' => $filteredBooks, 'filter' => $filter_applied]);
    }
}
