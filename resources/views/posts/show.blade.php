@extends('main')

@section('content')
<div class="preview">
    <div class="row d-flex justify-content-between">
        <div class="d-inline-flex pre-title">{{$post->title}}</div>
        <div class="d-inline-flex pre-title">{{$post->category}}</div>
    </div>
    <div class="mh-100 row justify-content-between pre-view">
            <div class="col p-2 d-inline-flex pre-recipe">
                {{$post->body}}
            </div>
            <div class="col p-2 d-inline-flex pre-schedule">
                Viimati küpsetatud: {{$post->updated_at}}
            </div>
            <div class="col p-2 d-inline-flex pre-img">
                <img src="/assets/img/brioche.jpg" class="img-fluid" alt="dummy image">
            </div>
    </div>
    <div class="row d-flex justify-content-end">
        <a href="{{ route('posts.edit', $post->id)}}" class="btn p-1">Muuda</a>
        <a href="{{ route('posts.destroy', $post->id)}}" class="btn p-1">Kustuta</button>
    </div>
@endsection