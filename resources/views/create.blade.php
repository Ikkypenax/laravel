@extends('./layout')
@section('container')


<div class="container">
  <div class="row">
    <div class="col">

<form method="POST" action="/store">
    @csrf
    <div class="mb-3">
      <label for="examplejudulbuku" class="form-label">Judul Buku</label>
      <input class="form-control form-control-lg" type="text" class="form-control" id="examplejudulbuku" name="judul_buku" >
    </div>
    <div class="mb-3">
      <label for="examplejudulbuku" class="form-label">Deskripsi</label>
      <input class="form-control form-control-lg" type="text" class="form-control" id="examplejudulbuku" name="deskripsi">
    </div>
    <div class="mb-3">
      <label for="examplejudulbuku" class="form-label">Penulis</label>
      <input class="form-control form-control-lg" type="text" class="form-control" id="examplejudulbuku" name="author">
    </div>
    <div>
    <label for="kategori">Pilih Kategori:</label>
    <select class="form-select form-select-lg mb-3" name="nama" id="kategori">
        @foreach ($kategori as $kat)
            <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
        @endforeach
    </select>
    </div>
    <div>
    <label for="penerbit">Pilih Penerbit:</label>
    <select class="form-select form-select-lg mb-3" name="penerbit" id="penerbit">
        @foreach ($penerbit as $penet)
            <option value="{{ $penet->id }}">{{ $penet->penerbit }}</option>
        @endforeach
    </select>
    </div>
    
    <button type="submit" class="d-grid gap-2 col-1 btn btn-success text-light">Submit</button>
  </form>
    </div>
  </div>
</div>
@endsection