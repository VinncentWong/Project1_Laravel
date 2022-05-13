<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function books(){
        return $this->hasMany(Book::class);
    }
}
