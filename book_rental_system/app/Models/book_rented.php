<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_rented extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "book_rented";
    protected $primaryKey = "id";
}
