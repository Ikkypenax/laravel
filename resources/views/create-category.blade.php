@extends('./layout')
@section('container')


<div class="container">
  <div class="row">
    <div class="col">

<form method="POST" action="/storecategory">
    @csrf
    <div class="mb-3">
      <label for="examplekategori" class="form-label">Kategori</label>
      <input class="form-control form-control-lg" type="text" class="form-control" id="examplekategori" name="nama" >
    </div>
    <button type="submit" class="d-grid gap-2 col-1 btn btn-success text-light">Submit</button>
  </form>
    </div>
  </div>
</div>
@endsection