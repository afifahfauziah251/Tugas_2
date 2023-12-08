@extends('layouts.main')

@section('content')

<div class="container">
    @if (session('error') != null)
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

<form action="{{ route('post.update', ['post' => $post->slug]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Masukkan Tittle </label>
                  <input 
                    type="text" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp" 
                    name="title"
                    value="{{ $post->title }}"
                    />
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masukkan Body </label>
                    <input type="text" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp" 
                    name="body"
                    value="{{ $post->body }}"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masukkan Author </label>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp" 
                    name="author"
                    value="{{ $post->author }}"
                    />
                  </div>
                <button type="submit" class="btn btn-primary">Edit
                </button>
              </form>
</div>


@endsection
