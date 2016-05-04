@extends('layouts.app')

@section('content')

<!-- View Race  -->
  <div class="col-md-6 col-md-offset-1">

    <h1>{{ $event->race_name }}</h1>
    <hr>
    <p> <strong>Race Month</strong> {{ $event->month}}</p>
    <p> <strong>City:</strong> {{ $event->city}}</p>
    <p> <strong>State:</strong> {{ $event->state}}</p>
    	<p><strong>Is this race Annual?</strong>
				@if ($event->annual_occurence = 0)
				<span>No</span>
				@else
				<span>Yes</span>
				@endif
			</p>
    <p> <strong>Description:</strong> {{ $event->description }}</p>
    <p> <strong>Distance:</strong> {{ $event->race_distance }}</p>
    <p> <strong>Race Link:</strong> {{ $event->link}}</p>
    <p> <strong>Distance:</strong> {{ $event->race_distance}}</p>


  </div>


  <div class="row">
   <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dl class="dl-horizontal">
          <label>Created At: Date</label>
          <p>{{date('M j, Y', strtotime($event->created_at)) }}</p>
          </dl>

        <dl class="dl-horizontal">
        <label>Last Updated</label>
        <p>{{date('M j, Y', strtotime($event->updated_at)) }}</p>
        </dl>
        <hr>
        <div class="row">

          <div class="col-sm-6">
            {!! Html::linkRoute('events.edit', 'Edit', array($event->id), array('class' => 'btn btn-success btn-block')) !!}
          </div>

          <div class="col-sm-6">
            <a href="{{ url('race/'.$event->slug) }}" class="btn btn-primary btn-block">View</a>
          </div>

          <div class="col-sm-6">
              {!! Form::open(['route' =>['events.destroy', $event->id], 'method' => 'DELETE']) !!}

              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

              {!! Form::close() !!}

          </div>
        </div>
      </div>
   </div>
   </div>

@endsection
