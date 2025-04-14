@extends('layouts.app')

@section('content')

    <h1>Detail Post</h1>
        <div>
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="150">
            @endif
        </div>
       <div>
       Title :
            {{ $post->title }}
        </div>
        <div>
        Content :
           {{ $post->content }}
        </div>

@endsection  