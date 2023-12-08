@extends('layouts.main')
@section('content')

<h1>Data Postingan Anda</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Tambah Data
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Masukkan Data Baru</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Masukkan Tittle </label>
                  <input 
                    type="text" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp" 
                    name="title"/>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masukkan Body </label>
                    <input type="text" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp" 
                    name="body">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masukkan Author </label>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp" 
                    name="author">
                  </div>
                <button type="submit" class="btn btn-primary">Tambahkan Data</button>
              </form>
        </div>
      </div>
    </div>
  </div><a href="/blog">kembali</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Judul</th>
        <th scope="col">Body</th>
        <th scope="col">Author</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data_artikel as $blog)
            <tr>
        <th>jj</th>
        <td>{{ $blog['title']}}</td>
        <td>{{ $blog['body']}}</td>
        <td>{{ $blog['author']}}</td>
        <td>
          <a href="{{ route('post.edit',['post' => $blog->slug]) }}">edit</a>
          <form action="{{ route('post.destroy', ['post' => $blog->slug]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" >hapus</button>
          </form>
        </td>
      </tr>
        @endforeach
      
    </tbody>
  </table>

                  
@endsection