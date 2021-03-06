@extends('layout.app')
@section('content')
    @include('templates.nav')
    <div class="container mt-5 pt-5">
        <h1 class="text-center mt-5 pt-5">Creer Services</h1>
        <form action="{{route('services.update', $service->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">Icon</label>
                <input type="text" name="icon" id="icon" value="{{$service->icon}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Titre</label>
                <input type="text" name="titre" id="titre" value="{{$service->titre}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <input type="text" name="description" id="description" value="{{$service->description}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('templates.footer')
@endsection