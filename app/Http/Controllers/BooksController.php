<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $result = DB::select("SELECT * FROM books");

        return view('booklist', ['books' => $result]);
    }

    public function insert()

    {
        $result = DB::insert(
            "INSERT INTO books (judul, ISBN, kategori, harga, halaman, penerbit,
           created_at, updated_at)
            VALUES ('Economic Dignity', '9781592339754', 'Business & Leadership',
           222900, 384, 'Penguin Press', NOW(), NOW())"

        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO books (judul, ISBN, kategori, harga, halaman, penerbit,
            created_at, updated_at)
            VALUES ('Food by Fire: Grilling and BBQ with Derek Wolf of Over the Fire Cooking', '9781592339755', 'Meat Cooking',
            310750, 208, 'Harvard Common Press', NOW(), NOW())"

        );
        dump($result);
    }

    public function update()
    {
        $result = DB::update(
            "UPDATE books SET kategori = ‘Meat Cooking’ WHERE ISBN = ?",
            ['9781592339759']
        );
        dump($result);
    }

    public function delete()
    {
        $result = DB::delete("DELETE FROM books WHERE ISBN = ?", ['9781592339754']);
        dump($result);
    }



    // public function update()
    // {
    //     $result = DB::update(
    //         "UPDATE books SET kategori = ‘Business & Leadership’ WHERE ISBN = ?",
    //         ['9781592339779']
    //     );
    //     dump($result);
    // }
}
