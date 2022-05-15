<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id ','created_at', 'updated_at'];
     // yang ga boleh diutak-atik atau diubah, intinya attribute ini hanya
     // bisa masuk ke transaksi bila diubah melalui kode program, ketika diedit melalui request dari user
     // dan akan melalui transaksi, maka pasti ditolak

     // inti : kalau diedit lewat request, pasti akan langsung ditolak di proses transaksi
    public function invoice(){
        return $this->hasMany(Invoice::class);
    }
    public function book(){
        return $this->hasMany(Book::class);
    }
}
