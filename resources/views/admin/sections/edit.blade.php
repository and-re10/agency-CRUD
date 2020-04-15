@extends('layout.app')
@section('content')
    @include('templates.nav')
    @include('templates.header')
    <div class="container ">
        <h1 class="text-center mt-5 pt-5">Editer Nom des Sections</h1>
        <form action="{{route('section.update', $section->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">Section 1</label>
                <input type="text" name="section1" id="section1" value="{{$section->section1}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Section 2</label>
                <input type="text" name="section2" id="section2" value="{{$section->section2}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Section 3</label>
                <input type="text" name="section3" id="section3" value="{{$section->section3}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Section 4</label>
                <input type="text" name="section4" id="section4" value="{{$section->section4}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Section 5</label>
                <input type="text" name="section5" id="section5" value="{{$section->section5}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('templates.footer')
    
@endsection