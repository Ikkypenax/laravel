<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use Illuminate\Http\Request;

class Controllerkategori extends Controller
{
    public function index() {
        $kategori = Kategoris::get();
        return view(view: 'category', data: compact('kategori') );
    }
    public function tambah() {    
        return view('create-category');
    }
    public function storecategory(Request $request) {  
        $kategori = [
            'nama' => $request->nama,
        ];
        Kategoris::create($kategori);
        return redirect()->to('category');
    }
    public function edit(Kategoris $kategori) {
        return view(view: 'edit-category', data: compact('kategori'));
    }
    public function update(Request $request, Kategoris $kategori) {
        $kate = [
            'nama' => $request->nama,
        ];
        $kategori->update($kate);
        return redirect()->to('category');
    }
    public function delete(Kategoris $kategori) {
        $kategori->delete();
        return redirect()->to('category');
    }
}
