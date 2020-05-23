@extends('main')

@section('content')
<div class="preview">
    <div class="d-inline-flex pre-title">Uus postitus</div>
    <div class="pre-view input_form">
        @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
        <form  method="POST" action="/posts" >
            {{ csrf_field() }}

            <div class="p-1 form-group w-75">
                <label  for="title" class="col-form-label"><span class="input-group-addon">Pealkiri</span></label>
                <input class="form-control" id="title" name="title">
                @error('title')
                    <p class="text-danger">Pealkiri on nõutud</p>
                @enderror
            </div>

            <div class="pl-1 form-group w-50">
                <label for="category" class="col-form-label"><span class="input-group-addon">Kategooria</span></label>
                <input  class="form-control" id="category" name="category">
            </div>

            <div class="pl-1 pt-1 form-group w-75">
                <label for="rating">Reiting nullist viieni</label>
                <input type="range" class="custom-range" min="1" max="5" step="1" id="rating" name="rating">
            </div>

            <div class="p-1 form-group">
                <label for="post" class="sr-only"><span class="input-group-addon">Postituse sisu</span></label>
                <textarea class="form-control" rows="15" id="post" name="post"></textarea>
                @error('post')
                    <p class="text-danger">Postitusel peab olema sisu</p>
                @enderror
            </div>

            <button class="ml-1 mb-1 btn btn-success" name="action" value="store">Salvesta</button>
        </form>
    </div>
@endsection