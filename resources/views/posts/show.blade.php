@extends('main')

@section('content')
<div class="preview">
    <div class="row d-flex justify-content-between">
        <div class="d-inline-flex pre-title">{{$post->title}}</div>
        <div class="d-inline-flex pre-title">{{$post->category}}</div>
    </div>
    <div class="row justify-content-between pre-view">
            <div class="col-12 p-2 d-inline-flex pre-recipe">
                {{$post->body}}
            </div>

            <div class="col-5 p-2 d-flex pre-schedule">
                <div class="p-2">
                    Küpsetatud: {{date('d. m, Y',  strtotime($post->updated_at)) }}
                </div>
                <div class="p-2">
                    Reiting: {{$post->rating }}
                </div>
            </div>
            <div class="p-2 d-inline-flex pre-img">
                <img src="/{{$post->image_url}}" class="img-fluid">
                
            </div>
    </div>

    

    <div class="row d-flex justify-content-end">
        <a href="{{ route('posts.edit', $post->id)}}" class="btn p-1">Muuda postitust</a>
    </div>
@endsection