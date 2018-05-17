@extends('app')

@section('content')
    <div class="text-center">Blog</div>
    @foreach($blogs as $blog) 
        <p>{{ $blog->title }}</p>
    @endforeach
@endsection