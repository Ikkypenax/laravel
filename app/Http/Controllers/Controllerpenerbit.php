<?php

namespace App\Http\Controllers;

use App\Models\Penerbits;
use Illuminate\Http\Request;

class Controllerpenerbit extends Controller
{
    public function index() {
        $penerbit = Penerbits::get();
        return view(view: 'penerbit', data: compact( 'penerbit'));
    }
    public function plus() {    
        return view('create-penerbit');
    }
    public function storepenerbit(Request $request) {  
        $penerbit = [
            'penerbit' => $request->penerbit
        ];
        Penerbits::create($penerbit);
        return redirect()->to('penerbit');
    }
    public function edit(Penerbits $penerbit) {
        return view(view: 'edit-penerbit', data: compact('penerbit'));
    }
    public function update(Request $request, Penerbits $penerbit) {
        $penu = [
            'penerbit' => $request->penerbit
        ];
        $penerbit->update($penu);
        return redirect()->to('penerbit');
    }
    public function delete(Penerbits $penerbit) {
        $penerbit->delete();
        return redirect()->to('penerbit');
    }
}
