<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function invoice(){
        return $this->hasMany(Invoice::class);
    }
    public function book(){
        return $this->hasMany(Book::class);
    }
}
