<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $timestamp = true;
    protected $guarded = ['id', 'created_at'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
