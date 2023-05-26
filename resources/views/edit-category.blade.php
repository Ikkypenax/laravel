@extends('./layout')
@section('container')


<div class="container">
  <div class="row">
    <div class="col">

<form method="POST" action="/updatekategori/{{ $kategori->id }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="examplekategori" class="form-label">Kategori</label>
      <input type="text" class="form-control" id="examplekategori" name="nama" value="{{ $kategori->nama}}" >
    </div>
    <button type="submit" class="d-grid gap-2 col-1 btn btn-success text-light">Submit</button>
  </form>
    </div>
  </div>
</div>
@endsection