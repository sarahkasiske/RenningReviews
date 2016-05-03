@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Login</h1>
          <hr>

          {!! Form::open() !!}

  				{{ Form::label('email', 'Email:') }}
  				{{ Form::email('email', null, ['class' => 'form-control ']) }}

  				{{ Form::label('password', "Password:", ['class' => 'margin-top']) }}
  				{{ Form::password('password', ['class' => 'form-control']) }}

  				<br>
  				{{ Form::checkbox('remember') }}{{ Form::label('remember', "Remember Me", ['class' => 'margin-left']) }}

  				<br>

          {{ Form::submit('Login', ['class' => 'btn btn-spacing margin-right btn-primary']) }}

          <a href="{{ url('/register') }}" class="btn btn-spacing btn-primary">Sign Up</a>

	         <br>
          <a class="btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>




  			{!! Form::close() !!}

    </div>
  </div>
</div>

@endsection
