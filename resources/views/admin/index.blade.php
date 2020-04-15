@extends('layout.app')
@section('content')
    @include('templates.nav')
    @include('templates.header')
    <div class="content my-5 py-5">         
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#sections-name" role="tab" aria-controls="home" aria-selected="true">Nom des Sections</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#header" role="tab" aria-controls="profile" aria-selected="false">Header</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#services" role="tab" aria-controls="contact" aria-selected="false">Services</a>         
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#portfolio" role="tab" aria-controls="contact" aria-selected="false">Portfolio</a>         
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#users" role="tab" aria-controls="contact" aria-selected="false">Users</a>         
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">                           

            <div class="tab-pane fade show active" id="sections-name" role="tabpanel" aria-labelledby="home-tab">
                <h1 class="text-center">Nom des Sections</h1>
                @if(count($sections) === 0)
                    <a href="{{route('section.create')}}" class="btn btn-primary">Create new</a>
                @endif
                <table class="table table-striped table-dark">              
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Section 1</th>
                        <th scope="col">Section 2</th>
                        <th scope="col">Section 3</th>
                        <th scope="col">Section 4</th>
                        <th scope="col">Section 5</th>      
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($sections as $section)
                            <tr>
                                <th scope="row">{{$section->id}}</th>
                                <td>{{$section->section1}}</td>
                                <td>{{$section->section2}}</td>
                                <td>{{$section->section3}}</td>
                                <td>{{$section->section4}}</td>
                                <td>{{$section->section5}}</td>
                                <td>
                                    <form action="{{route('section.destroy', $section->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('section.edit', $section->id)}}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="header" role="tabpanel" aria-labelledby="profile-tab">
                <h1 class="text-center">Header</h1>
                @if(count($headers) === 0)
                    <a href="{{route('header.create')}}" class="btn btn-primary">Create new</a>
                @endif
                <table class="table table-striped table-dark">              
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Titre 1</th>
                        <th scope="col">Titre 2</th>
                        <th scope="col">Image</th>    
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($headers as $header)
                            <tr>
                                <th scope="row">{{$header->id}}</th>
                                <td>{{$header->titre1}}</td>
                                <td>{{$header->titre2}}</td>
                                <td>{{$header->img_path}}</td>
                                <td>
                                    <form action="{{route('header.destroy', $header->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('header.edit', $header->id)}}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- ------------------------------------------------------------ --}}
            <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="contact-tab">
                <h1 class="text-center">Services</h1>
                @if(count($services) < 3)
                    <a href="{{route('services.create')}}" class="btn btn-primary">Create new</a>
                @endif
                <table class="table table-striped table-dark">              
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Description</th>     
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <th scope="row">{{$service->id}}</th>
                                <td>{{$service->icon}}</td>
                                <td>{{$service->titre}}</td>
                                <td>{{$service->description}}</td>
                                <td>
                                    <form action="{{route('services.destroy', $service->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('services.edit', $service->id)}}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>       
              {{-- ------------------------------------------------------------  --}}
            <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="contact-tab">
                <h1 class="text-center">Portfolio</h1>
                @if(count($sections) === 0)
                    <a href="{{route('section.create')}}" class="btn btn-primary">Create new</a>
                @endif
                <table class="table table-striped table-dark">              
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Section 1</th>
                        <th scope="col">Section 2</th>
                        <th scope="col">Section 3</th>
                        <th scope="col">Section 4</th>
                        <th scope="col">Section 5</th>      
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($sections as $section)
                            <tr>
                                <th scope="row">{{$section->id}}</th>
                                <td>{{$section->section1}}</td>
                                <td>{{$section->section2}}</td>
                                <td>{{$section->section3}}</td>
                                <td>{{$section->section4}}</td>
                                <td>{{$section->section5}}</td>
                                <td>
                                    <form action="{{route('section.destroy', $section->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('section.edit', $section->id)}}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
             {{-- --------------------------------  --}}
            <div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="contact-tab">
                <h1 class="text-center">Users</h1>
                <a href="{{route('users.create')}}" class="btn btn-primary">Create new</a>
                <table class="table table-striped table-dark">              
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>    
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->password}}</td>
                                <td>
                                    <form action="{{route('users.destroy', $user->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>                   
          </div>
    </div>

    {{-- {!! Form::open(['route' => '', 'method' => 'post']) !!}

    {!! Form::close() !!} --}}

    @include('templates.footer')


@endsection         