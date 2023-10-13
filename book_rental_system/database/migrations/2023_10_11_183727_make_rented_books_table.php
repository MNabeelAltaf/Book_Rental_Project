<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_rented', function (Blueprint $table) {
            $table->id();
            $table->integer('book_id');
            $table->string('title');
            $table->string('author');
            $table->dateTime('published_date');
            $table->string('publisher');
            $table->string('isbn');
            $table->string('user_email');
            $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
