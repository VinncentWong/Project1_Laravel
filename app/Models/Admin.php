<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;

    protected $guard = ['id', 'created_at'];

    public function books(){
        return $this->belongsTo(Book::class);
    }
}
