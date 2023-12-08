@extends('layouts.main')
@section('content')

<div class="col-md-15 col-sm-12 mb-5 bg-white p-0">

    <div class="p-4">
        <h2 align="center">{{ $article->title }} </h2>
        <img src="{{ asset('assets/img/me.jpg') }}" width="250"style="display:block; margin:auto;">
        <p class="mt-5">{{ $article->body }}</p>
    </div>
</div>
@endsection