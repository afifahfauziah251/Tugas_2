@extends('layouts.main')
@section('content')

<h1> Ini tampilan Blog </h1>

@foreach ($posts as $post)
<h2>
    <a href="/blog2/{{ $post['slug'] }}"> {{ $post['title'] }} </a>
</h2>
<h5> By : {{ $post['author'] }} </h5>
<p>{{ $post['body'] }}</p>

@endforeach
@endsection
