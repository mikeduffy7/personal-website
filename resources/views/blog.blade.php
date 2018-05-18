@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($post as $p) 
                <div class="col-md-8 col-md-offset-2 blog-shadow">
                    <h3 class="text-center">{{ $p->title }}</h3>
                    <p class="blog-body">{{ $p->body }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection