{!! Form::label('title', 'Title') !!}
{!! Form::text('title', null, ['class' => 'form-control']) !!}

{!! Form::label('body', 'Description') !!}
{!! Form::textarea('body', null, ['class' => 'form-control']) !!}

{!! Form::label('published_at', 'Published At') !!}
{!! Form::date('published_at', null, ['class' => 'form-control']) !!}
		
{!! Form::submit('Save Blog', ['class' => 'btn btn-primary form-control']) !!}