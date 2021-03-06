@extends('main')
@auth
    @section('content')
    <div class="preview">
        <div class="d-inline-flex pre-title">Uus postitus</div>
        <div class="pre-view input_form">
            <form  method="POST" action="/posts" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="p-1 form-group w-75">
                    <label  for="title" class="col-form-label"><span class="input-group-addon">Pealkiri</span></label>
                <input class="form-control @error('post') input-error @enderror" id="title" name="title" value="{{ old('title')}}">
                    @error('title')
                        <p class="text-danger">Pealkiri on nõutud</p>
                    @enderror
                </div>

                <div class="pl-1 form-group w-50">
                    <label for="category" class="col-form-label"><span class="input-group-addon">Kategooria</span></label>
                <input  class="form-control" id="category" name="category" value="{{ old('category') }}">
                </div>

                <div class="pl-1 pt-1 form-group w-75">
                    <label for="rating">Reiting nullist viieni</label>
                <input type="range" class="custom-range" min="1" max="5" step="1" id="rating" name="rating" value="{{ old('rating') }}">
                </div>

                <div class="p-1 form-group">
                    <label for="post" class="sr-only"><span class="input-group-addon">Postituse sisu</span></label>
                <textarea class="form-control @error('post') input-error @enderror" rows="15" id="post" name="post">{{ old('post') }}</textarea>
                    @error('post')
                        <p class="text-danger">Postitusel peab olema sisu</p>
                    @enderror
                </div>
                
                <div class="p-1 form-group">
                    <div>
                        <label for="image">Foto</label>
                        <input class="btn btn-light" type="file" id="image" name="image" >
                    </div>
                </div>

                <button class="ml-1 mb-1 btn btn-success" name="action" value="store">Salvesta</button>
            </form>
        </div>
    @endsection
@else
    @section('content')
        <p>Selle lehe kasutamiseks on vajalik sisse logimine</p>
    @endsection
@endauth
