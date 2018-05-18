@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="text-center">Upload Article</h4>

        <form action="post" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <input name="title" 
                    type="text" 
                    class="form-control"
                    placeholder="Title">
            </div>
            <div class="form-group">
                <textarea name="body" 
                    type="text" 
                    class="form-control" 
                    cols="15" rows="10"
                    placeholder="What are you thinking...">
                </textarea>
            </div>
            <div class="form-group">
                <select name="type">
                    <option selected disabled>Type</option>
                    <option value="blog">Blog</option>
                    <option value="article">Article</option>
                </select>
            </div>
            
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
@endsection