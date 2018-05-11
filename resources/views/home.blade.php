@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#article-upload">Upload Article</button>
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#code-upload">Upload Code</button>
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#">Personal Finances</button>
                        <a href="todo"><button type="button" class="btn btn-primary btn-md">To-Do List</button></a>
                        <p>to-do list can have list of tasks, things in progress, and a section for me to keep notes on my status, why things aren't getting done, and have a section to have goals</p>
                        <p>personal finance can be just a table of money i make, monethly subscriptions, mandatory bills, how much i spend on food, etc.
                            
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>

@include('articles.upload')
@include('code.upload')
@endsection
