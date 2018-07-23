@extends('layouts.app')

@section('content')

	{!! Form::model($blog, array('method' => 'PATCH', 'action' => ['BlogController@update', $blog->id])) !!}

		@include('form')

	{!! Form::close() !!}

@endsection