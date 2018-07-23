@extends('layouts.app')

@section('content')

	{!! Form::open(array('action' => "BlogController@store")) !!}

		@include('form')

	{!! Form::close() !!}

@endsection