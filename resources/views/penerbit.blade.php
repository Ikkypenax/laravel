@extends('./layout')
@section('container')

<div class="container">
  <div class="row">
    <div class="col">

      <a class="btn btn-primary text-light" href="/createpenerbit">Tambah data</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
        $no=1;
    @endphp  
    @foreach($penerbit as $b)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $b->penerbit }}</td>
      <td>
        <a type="button" class="d-grid gap-1 col-3 btn btn-warning text-light " href="/editpenerbit/{{ $b->id }}" > Edit </a>
        <form action="/deletepenerbit/{{ $b->id }}" method="post"> 
            @csrf
            @method('delete')
            <button class="d-grid gap-1 col-3 btn btn-danger text-light"type="submit"> Hapus</button> 
        </form> 
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection
