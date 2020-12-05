@extends('layout.app')

@section('content')
    <header>
        <h1>Home <small>only text</small></h1>
    </header>

    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="{{ route('post.show', $post->id) }}" rel="noopener noreferrer">
                {{ $post->title }}
            </a>
        </li>
        @endforeach
    </ul>
@endsection