<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Mail;
use App\Mail\MyCustomEmail;

class send_mail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:send_mail';
    protected $signature = 'app:send_mail {--email=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->option('email');

        $data = [
            'Email' => 'Book System',
            'message' => 'Thank you for using our service. It is inform you that, your book rented time is over. Kindly return the book.'
        ];

        Mail::to($email)->send(new MyCustomEmail($data));
    }

}
