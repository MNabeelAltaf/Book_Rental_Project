<?php

namespace App\Http\Controllers;

use App\Console\Commands\send_mail;
use App\Models\book_rented;
use App\Models\books_table;
use App\Models\users;
use Illuminate\Support\Facades\Artisan;


use Illuminate\Support\Facades\Date;
use Illuminate\Http\Request;

class book_detail extends Controller
{
    function book_detail(Request $req)
    {

        $id = $req->id;
        $books = books_table::find($id);
        return view('book_detail', ['books' => $books]);
    }


    function book_rented(Request $req)
    {

        $email = session('email');

        if ($email == null) {
            return redirect('login');
        }

        // check that user has rented 4 books maximun

        $recordCount = book_rented::where('user_email', $email)->count();

        $limit = 4;

        if ($recordCount >= $limit) {
            return redirect()->back()->with('rented_limit_error', 'Book rented limit has been exceeded.');
        }


        // id of book that user has selected
        $book_id = $req->id;

        // we get record of book that have selected by user from database
        $book = books_table::find($book_id);
        if ($book) {
            $db_book_title = $book->title;
            $db_book_id = $book->id;
            $db_book_author = $book->author;
            $db_book_isbn = $book->isbn;
            $db_book_published_date = $book->published_date;
            $db_book_publisher = $book->publisher;

            $book->availability_status = "no";
            $book->save();
        }



        // generating current data
        date_default_timezone_set('Asia/Karachi');
        $timezone = date_default_timezone_get();
        $_curr_time = Date::now()->format('Y-m-d H:i:s');

        // store book that have selected by user to book rented table
        $rented_book = new book_rented();

        try {
            $rented_book->book_id = $db_book_id;
            $rented_book->title = $db_book_title;
            $rented_book->author = $db_book_author;
            $rented_book->published_date = $db_book_published_date;
            $rented_book->publisher =  $db_book_publisher;
            $rented_book->isbn = $db_book_isbn;
            $rented_book->user_email = $email;
            $rented_book->rented_date = $_curr_time;
            $rented_book->save();
        } catch (\Throwable $th) {
            dd('Error Occured' . $th);
        }


        session(['book_rented' => 'Book has rented sucessfully']);
        return redirect('profile');
    }

    function rented_book_detail(Request $req)
    {
        $id = $req->rented_book_id;;
        $books = book_rented::find($id);

        
        if ($books != null) {
            $rentedDate = \Carbon\Carbon::parse($books->rented_date)->format('Y-m-d');

            date_default_timezone_set('Asia/Karachi');

            // Get the current date
            $currentDate = \Carbon\Carbon::now()->format('Y-m-d');
            // Add 2 days to the rented date
            $twoDaysAfterRented = \Carbon\Carbon::parse($rentedDate)->modify('+2 days');

            $is_match = \Carbon\Carbon::parse($currentDate)->greaterThan($twoDaysAfterRented);

            // Check if the current date is after the two days after the rented date
            if ($is_match) {
                $user_email = session('email');

                // call and send send email using cron job (app/console/commands/send_mail) 
                Artisan::call('app:send_mail', ['--email' => $user_email]);

                // dd("Two days have passed after the rented date.");
            }
        }

        return view('rented_book_detail', ['books' => $books]);
    }

    function return_rented_book(Request $req)
    {

        $email = session('email');
        try {
            $rented_book_id = $req->rented_book_id;
            $rented_book = book_rented::find($rented_book_id);

            $book_id = $rented_book->book_id;


            //delete rented book bcz user has returned book so remove it from book_rented table

            if ($rented_book) {
                $rented_book->delete();
            } else {
                return view('profile')->with('error', 'Error occured');
            }

            // change rented book availability status into "yes'
            $book_table = books_table::find($book_id);

            if ($book_table) {
                $book_table->availability_status = 'yes';
                $book_table->save();
            } else {
                return view('profile')->with('error', 'Error occured');
            }


            $user = users::where('email', $email)->first();
            $user_image = 'user_dp/' . $user->image_name;
        } catch (\Throwable $th) {
            return view('profile')->with('error', 'Error occured');
        }

        return redirect('profile')->with([
            'success' => 'Book Returned Successfully',
            'user_dp' => $user_image
        ]);
    }
}
