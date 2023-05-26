@extends('./layout')
@section('container')


<div class="container">
  <div class="row">
    <div class="col">

<form method="POST" action="/update/{{ $book->id }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="examplejudulbuku" class="form-label">Judul Buku</label>
      <input class="form-control form-control-lg" type="text" class="form-control" id="examplejudulbuku" name="judul_buku" value="{{ $book->judul_buku}}" >
    </div>
    <div class="mb-3">
      <label for="exampledeskripsi" class="form-label">Deskripsi</label>
      <input class="form-control form-control-lg" type="text" class="form-control" id="exampledeskripsi" name="deskripsi" value="{{ $book->deskripsi}}" >
    </div>
    <div class="mb-3">
      <label for="exampleauthor" class="form-label">Penulis</label>
      <input class="form-control form-control-lg" type="text" class="form-control" id="exampleauthor" name="author" value="{{ $book->author}}" >
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Pilih Kategori:</label>
      <select class="form-select form-select-lg mb-3" type="text" class="form-control" id="nama" name="nama">
        @forelse ($kategori as $kat)
            <option value="{{ $kat->id }}" @if ($kat->id === $book->kategori_id) 
                selected
            @endif>{{ $kat->nama }}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3">
      <label for="penerbit" class="form-label">Pilih Penerbit:</label>
      <select class="form-select form-select-lg mb-3" type="text" class="form-control" id="penerbit" name="penerbit">
        @forelse ($penerbit as $pent)
            <option value="{{ $pent->id }}" @if ($pent->id === $book->penerbit_id) 
                selected
            @endif>{{ $pent->penerbit }}</option>
        @endforeach
    </select>
    </div>
    <button type="submit" class="d-grid gap-2 col-1 btn btn-success text-light">Submit</button>
  </form>
    </div>
  </div>
</div>
@endsection