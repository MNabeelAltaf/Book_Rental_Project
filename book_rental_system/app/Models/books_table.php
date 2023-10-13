<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books_table extends Model
{
    use HasFactory;
    protected $table  = 'books_table';
    protected $primaryKey = 'Book_id';
    public $timestamps = false;
}
