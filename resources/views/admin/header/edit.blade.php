@extends('layout.app')
@section('content')
    @include('templates.nav')
    <div class="container mt-5 pt-5">
        <h1 class="text-center mt-5 pt-5">Editer Header</h1>
        <form action="{{route('header.update', $header->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">Titre 1</label>
                <input type="text" name="titre1" id="titre1" value="{{$header->titre1}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Titre 2</label>
                <input type="text" name="titre2" id="titre2" value="{{$header->titre2}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="img" id="img" value="{{$header->img_path}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('templates.footer')            
@endsection