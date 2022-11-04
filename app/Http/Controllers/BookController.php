<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function insert() {
        // $book = new Book();

        // $book->judul = "Buku 1";
        // $book->halaman = 100;
        // $book->penerbit = "ANDI";
        // $book->harga = 100000;
        // $book->isbn = "1234567890123";
        // $book->kategori = "Undang-Undang";

        // $book-> save();

        Book::create(
            [
                'judul' => 'The Bench',
                'halaman' => 40,
                'penerbit' => 'Random House Books for Young Readers',
                'harga' => 181500,
                'ISBN' => '9780593434512',
                'kategori' => 'Growing Up & Facts of Life',
            ]
        );
        return 'Data buku sudah masuk!';
    }

    public function update(){
        $book = Book::find(1);
        $book->judul = "Book Bagus";
        $book->harga = 250000;

        // $book = Book::where('harga', '<' 200000)-> get()
        // foreach($book)
        // $book =
        // $book
        $book->save();

    }

    public function delete()
    {
        Book::find(1)->delete();
    }

    public function select()
    {
        $result = Book::where('harga', '<', 200000)->get();

        foreach ($result as $book){
            echo "Judul Buku" , $book-> judul. "<br>";
        }
        dump($result);
    }
}
