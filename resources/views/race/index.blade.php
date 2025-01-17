@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md8 col-md-offset-2">
      <h1>Races</h1>
      <hr>
    </div>
  </div>

    @foreach ($events as $event)
        <div class="row">
          <div class="col-md8 col-md-offset-2">
            <h2>{{ $event->race_name }}</h2>
            <h5>Published:{{ date('M j, Y', strtotime($event->created_at)) }}</h5>
            <p>Description:{{ substr($event->description, 0, 250)}}{{ strlen($event->description) > 250 ? "..." : "" }}</p>
            <a href="{{ url('race/'.$event->slug) }}" class="btn btn-primary">Read More</a>
          <hr
        </div>
      </div>
    @endforeach

      <div class = 'text-center'>
        {!! $events->links(); !!}

    </div>



@endsection
