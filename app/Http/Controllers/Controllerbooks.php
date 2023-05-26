<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Penerbits;
use App\Models\Kategoris;
use Illuminate\Http\Request;

class Controllerbooks extends Controller
{
    public function index() {
        
        $buku = Books::get();
        return view(view: 'books', data: compact('buku'));
    }
    public function create() {    
        $buku = Books::get();
        $kategori = Kategoris::get();
        $penerbit = Penerbits::get();
        return view(view: 'create', data: compact('buku', 'kategori', 'penerbit'));
    }
    public function store(Request $request) {  
        Books::create( [
            'judul_buku' => $request->judul_buku,
            'deskripsi' => $request->deskripsi,
            'author' => $request->author,
            'kategori_id' => $request->nama,
            'penerbit_id' => $request->penerbit,
        ]);
        return redirect()->to('books');
    }
    public function edit(Books $book) {
        $buku = Books::get();
        $kategori = Kategoris::get();
        $penerbit = Penerbits::get();
        return view(view: 'edit-books', data: compact('book','buku','kategori','penerbit'));
    }
    public function update(Request $request, Books $book) {
        $buku = [
            'judul_buku' => $request->judul_buku,
            'deskripsi' => $request->deskripsi,
            'author' => $request->author,
            'kategori_id' => $request->nama,
            'penerbit_id' => $request->penerbit,
        ];
        $book->update($buku);
        return redirect()->to('books');
    }
     public function delete(Books $book) {
        $book->delete();
        return redirect()->to('books');
    }
}
