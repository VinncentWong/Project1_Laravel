<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function addBook(Request $request){
        $request->validate([
            'id' => 'required|numeric',
            'name' => 'required',
            'password'=> 'required',
        ]);
        Book::save($request->all());
        return "Success !";
    }
}
