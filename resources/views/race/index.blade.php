@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md8 col-md-offset-2">
      <h1>Races</h1>
    </div>
  </div>

    @foreach ($events as $event)
        <div class="row">
          <div class="col-md8 col-md-offset-2">
            <h1>{{ $event->race_name }}</h1>
            <h5>Published:{{ date('M j, Y', strtotime($event->created_at)) }}</h5>
            <p>Description:{{ substr($event->description, 0, 250)}}{{ strlen($event->description) > 250 ? "..." : "" }}</p>
          <a href="{{ route('race.single', $event->id ) }}" class = "btn btn-primary">Read More</a>
          <hr
        </div>
      </div>
    @endforeach

      <div class = 'text-center'>
        {!! $events->links(); !!}

    </div>



@endsection
