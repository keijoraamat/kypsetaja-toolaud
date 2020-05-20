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
    </div>
    <div class="comments">
        @forelse ($post['comment'] as $comment)
            <div class="comment d-flex flex-column">
            <div>Kommenteerija <strong>{{$comment['name']}}</strong> arvas {{ date('d. m Y',  strtotime($comment->created_at)) }} nii:</div>
            <div class="text-secondary">{{$comment['body']}}</div>
            @auth
                <form method="POST" action="{{ route('comment.destroy', $comment->id)}}">
                    @csrf
                    @method('DELETE')
                    <button  class="ml-1 mb-1 btn btn-danger" name="action" value="destroy">Kustuta kommentaar</button >
                </form>
            @endauth
            </div>
            <hr>
        @empty
            Kommentaarid puuduvad
        @endforelse
    </div>
    <div>
        <form action="/posts/comment" method="POST">
            @csrf
            <input type="hidden" id="posts_id" name="posts_id" value="{{$post->id}}">
            <div class="p-1 form-group w-75">
                <label  for="name" class="col-form-label"><span class="input-group-addon">Nimi</span></label>
                <input class="form-control" id="name" name="name">
            </div>
            <div class="p-1 form-group">
                <label for="comment" class="sr-only"><span class="input-group-addon">Kommentaar</span></label>
                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
            </div>
            <button class="ml-1 mb-1 btn btn-info" name="action" value="store">Salvesta kommentaar</button>
        </form>
    </div>
@endsection