@extends('main')

@section('content')
<div class="preview">
    <div class="d-inline-flex pre-title">Muuda postitust</div>
    <div class="pre-view input_form">
        <form  method="POST" action="{{ route('posts.show', $post->id)}}" > 
            {{ csrf_field() }}
            @method('PUT')
            <div class="p-1 form-group w-75">
                <label  for="title" class="col-form-label"><span class="input-group-addon">Pealkiri</span></label>
            <input class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="pl-1 form-group w-50">
                <label for="category" class="col-form-label"><span class="input-group-addon">Kategooria</span></label>
            <input  class="form-control" id="category" name="category" value="{{ $post->category }}">
            </div>
            <div class="pl-1 pt-1 form-group w-75">
                <label for="rating">Reiting nullist viieni</label>
            <input type="range" class="custom-range" min="1" max="5" step="1" id="rating" name="rating" value="{{ $post->rating }}">
            </div>
            <div class="p-1 form-group">
                <label for="post" class="sr-only"><span class="input-group-addon">Postituse sisu</span></label>
            <textarea class="form-control" rows="15" id="post" name="post">{{ $post->body }}</textarea>
            </div>
            <button class="ml-1 mb-1 btn btn-success" name="action" value="store">Salvesta muudatused</button>
            <a href="{{ route('posts.show', $post->id)}}" class="ml-1 mb-1 btn btn-secondary" name="action" value="cancel">Katkesta</a>
        </form>
        <form method="POST" action="/posts/{{ $post->id }}">
            {{ csrf_field() }}
            @method('DELETE')
            <button  class="ml-1 mb-1 btn btn-danger" name="action" value="destroy">Kustuta</button >
        </form>
    </div>
@endsection