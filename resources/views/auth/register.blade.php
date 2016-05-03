@extends('layouts.app')

@section('content')
<div class="row">
		<div class="col-md-6 col-md-offset-3">
    <h1>Create an Account</h1>
    <hr>

      {!! Form::open() !!}

				{{ Form::label('name', "Name:") }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				{{ Form::label('email', 'Email:', ['class' => 'margin-top']) }}
				{{ Form::email('email', null, ['class' => 'form-control']) }}

				{{ Form::label('password', 'Password:', ['class' => 'margin-top']) }}
				{{ Form::password('password', ['class' => 'form-control']) }}

				{{ Form::label('password_confirmation', 'Confirm Password:', ['class' => 'margin-top']) }}
				{{ Form::password('password_confirmation', ['class' => 'form-control']) }}

				{{ Form::submit('Sign Up', ['class' => 'btn btn-primary btn-block margin-top form-spacing-top']) }}

			{!! Form::close() !!}
		</div>
	</div>@endsection
