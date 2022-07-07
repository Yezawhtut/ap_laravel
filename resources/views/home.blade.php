@extends('layout')

@section('content')
    <div class="container">
        <div>
            <a href="/posts/create" class="btn btn-success">
                New Post +
            </a>
            <a href="/logout" class="btn btn-warning">
                Logout
            </a>
            <h4 style="float:right">{{Auth::user()->name}}</h4>
        </div></br>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card">
            <div class="card-header" style="text-align:center">
                Contents
            </div>

            <div class="card-body">
                @foreach($data as $post)
                <div>
                    <h5 class="card-title">{{$post->name}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <div class="form-row">
                        <a style="height: 40px; margin-right: 10px" href="/posts/{{$post->id}}" class="btn btn-primary">View</a>
                        <a style="height: 40px; margin-right: 10px" href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/posts/{{$post->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div><hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection