@extends('main')
                
 @section('content')              
                <div class="preview">
                    @forelse ($posts as $post)
                    <div class="pb-5">
                        <div class="d-flex justify-content-start">
                            <div class="p-2 d-inline-flex">{{ date('d m Y',  strtotime($post->created_at)) }} </div>
                            <div class="d-inline-flex pre-title">{{ $post->title }}</div>
                        </div>
                    <div class="row justify-content-between pre-view">
                        <div class="col p-2 d-inline-flex pre-recipe">
                            {{substr_count($post->body, "\n") > 3 ? strtok($post->body, "\n").strtok("\n").strtok("\n") : $post->body}}
                        </div>
                        <div class="col p-2 d-flex">
                                <a class="d-inline-flex aligin-self-end" href="{{ route('posts.show', $post->id)}}">Loe lisa</a>
                        </div>
                        <div class="col p-2 d-inline-flex pre-img">
                            <img src="assets/img/brioche.jpg" class="img-fluid" alt="dummy image">
                        </div>
                    </div>
                </div>
                    @empty
                        <p>Postitused puuduvad.</p>
                    @endforelse
                </div>
@endsection           