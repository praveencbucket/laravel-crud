@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	{{$blog->title}}
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	{{$blog->body}}
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	{{$blog->published_at}}
        </div>
    </div>
</div>

@endsection