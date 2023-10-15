<?php

namespace App\Http\Controllers;

use App\Mail\MyCustomEmail;
use App\Models\book_rented;
use App\Models\books_table;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;




class home extends Controller
{

    function homeView()
    {
        try {
            $books = DB::table('books_table')->paginate(20, ['*'], 'p');


            


            return view('home', ['books' => $books]);
        } catch (\Throwable $th) {
            // error occured here
            return view('home');
        }
    }
}



//comparing deadling
            // $book_rented_table = book_rented::all();
            // if ($book_rented_table->count() > 0) {

            //     $emailArray = [];

            //     $currentDate = \Carbon\Carbon::now()->format('Y-m-d');

            //     foreach ($book_rented_table as $book_rented) {
            //         $rentedDate = \Carbon\Carbon::parse($book_rented->rented_date)->format('Y-m-d');

            //         date_default_timezone_set('Asia/Karachi');

            //         // Add 2 days to the rented date
            //         $twoDaysAfterRented = \Carbon\Carbon::parse($rentedDate)->modify('+2 days');

            //         // Check if the current date is after the two days after the rented date
            //         if (\Carbon\Carbon::parse($currentDate)->greaterThan($twoDaysAfterRented)) {
            //             // Add the email to the array if current date is greater then rented date
            //             $emailArray[] = $book_rented->user_email;
            //         }
            //     }
            //     $uniqueEmailArray = array_unique($emailArray, SORT_REGULAR);

            //     // call and send send email using cron job (app/console/commands/send_mail) 
            //     if (count($uniqueEmailArray) > 0) {
            //         // Sending email in an asynchronous manner
            //         dispatch(function () use ($uniqueEmailArray) {
            //             foreach ($uniqueEmailArray as $email) {
            //                 Mail::to($email)->send(new MyCustomEmail());
            //                 sleep(1); // Add a short delay between each email for better performance
            //             }
            //         })->afterResponse();
            //     }
            // }