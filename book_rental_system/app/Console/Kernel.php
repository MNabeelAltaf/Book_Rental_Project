<?php

namespace App\Console;

use App\Mail\MyCustomEmail;
use App\Models\book_rented;
use Illuminate\Support\Facades\Mail;



use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();

        $schedule->call(function () {
            $book_rented_table = book_rented::all();
            $emailArray = [];
            $currentDate = \Carbon\Carbon::now()->format('Y-m-d');

            foreach ($book_rented_table as $book_rented) {
                $rentedDate = \Carbon\Carbon::parse($book_rented->rented_date)->format('Y-m-d');
                $twoDaysAfterRented = \Carbon\Carbon::parse($rentedDate)->modify('+2 days');

                if (\Carbon\Carbon::parse($currentDate)->greaterThan($twoDaysAfterRented)) {
                    $emailArray[] = $book_rented->user_email;
                }
            }

            $uniqueEmailArray = array_unique($emailArray, SORT_REGULAR);
            foreach ($uniqueEmailArray as $email) {
                Mail::to($email)->send(new MyCustomEmail());
                sleep(1); 
            }
        })->dailyAt('5:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
