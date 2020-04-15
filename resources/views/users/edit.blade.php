@extends('layout.app')
@section('content')
    @include('templates.nav')
    <div class="container mt-5 pt-8">
        <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="password" value="{{$user->password}}" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('templates.footer')            
@endsection