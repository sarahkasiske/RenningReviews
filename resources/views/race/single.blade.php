@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md8 col-md-offset-2">
    <h1>{{ $event->race_name }}</h1>
    <p>{{ $event->description }}</p>
  </div>
  </div>


@endsection
