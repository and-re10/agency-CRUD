@extends('layout.app')
@section('content')
    @include('templates.nav')
    <div class="container mt-5 pt-8">
        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
        </form>
    </div>
    @include('templates.footer')
@endsection