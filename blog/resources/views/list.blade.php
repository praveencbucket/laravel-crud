@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<ul>
			@foreach ($blogs as $blog)
				<li>
					<a href={{ url('blogs', [$blog->id]) }}>{{ $blog->title }}</a>
				</li>
			@endforeach
		</ul>
	</div>
</div>

@endsection