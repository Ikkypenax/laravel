
@extends('./layout')
@section('container')


<div class="container">
  <div class="row">
    <div class="col">

      <a class="btn btn-primary text-light" href="/create">Tambah data</a>

      
      <table class="table">
        <thead>
          <tr>
      <th scope="col">no</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no=1;
    @endphp  
    @foreach($buku as $b)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $b->judul_buku }}</td>
      <td>{{ $b->deskripsi }}</td>
      <td>{{ $b->author }}</td>
      <td>{{ $b->penerbit['penerbit'] }}</td>
      <td>{{ $b->kategori['nama'] }}</td>
      <td>
        <a type="button" class="d-grid gap-2 col-6 mx-auto btn btn-warning text-light "  href="/edit/{{ $b->id }}" > Edit </a>
        <form action="/delete/{{ $b->id }}" method="post"> 
          @csrf
          @method('delete')
            <button class="d-grid gap-2 col-6 mx-auto btn btn-danger" type="submit"> Hapus</button> 
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