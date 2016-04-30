@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
        <div class="row">
              <div class="col-md-10">
                <div class="jumbotron">
                  <h2>Find a Race!</h2>

                  <p class="lead">Search will go here</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
              </div>
            </div>



          @foreach($events as $event)

            <div class="row">
              <div class="col-md-10">

                <div class="post">
                  <hr>
                  <h3>{{ $event->race_name }}</h3>
                  <p>{{ substr($event->description, 0, 300) }}{{ strlen($event->description) > 300 ? "..." : "" }} </p>
                  <a href="{{ url('race/'.$event->slug) }}" class="btn btn-primary">Read More</a>
                </div>
              </div>

            </div>



          @endforeach


            </div>
        </div>
    </div>
</div>
@endsection
