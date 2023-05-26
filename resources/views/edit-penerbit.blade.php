@extends('./layout')
@section('container')


<div class="container">
  <div class="row">
    <div class="col">

<form method="POST" action="/updatepenerbit/{{ $penerbit->id }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="examplePenerbit" class="form-label">Penerbit</label>
      <input class="form-control form-control-lg" class="form-control form-control-lg" type="text" class="form-control" id="examplePenerbit" name="penerbit" value="{{ $penerbit->penerbit}}" >
    </div>
    <button type="submit" class="d-grid gap-2 col-1 btn btn-success text-light">Submit</button>
  </form>
    </div>
  </div>
</div>
@endsection