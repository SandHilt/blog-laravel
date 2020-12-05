@extends('layout.app')

@section('content')
    <header>
        <a href="{{ route('home')}}">Retornar</a>
        <h1>Post <small>#{{ $post->id }}</small></h1>
    </header>

    <article>
        <header>
            <h2>{{ $post->title }}</h2>
        </header>
        <p>{{ $post->content }}</p>
        <footer>
            by {{ $post->author->name }}
        </footer>
    </article>
@endsection