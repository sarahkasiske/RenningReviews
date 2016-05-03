@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
    <h1>{{ $event->race_name }}</h1>
    <p>{{ $event->description }}</p>

    <h1>Reviews</h1>

    @foreach($reviews as $review)
    @if($review->event_id == $event->id)



    <h3>{{ $review->title }}</h1>

    <hr>
    <p> <strong>Did you Participate in the Race? </strong> {{ $review->participation}}</p>

    <p > <strong>Overall Rating: </strong> {{ $review->overall}}</p>

    <p> <strong>Packet Pickup Rating: </strong> {{ $review->packet_pickup}}</p>

    <p> <strong>Crowd Support Rating</strong> {{ $review->crowd_support}}</p>

    <p> <strong>Review:</strong> {{ $review->review }}</p>


    @endif
    @endforeach

  @if (Auth::guest())
  <hr>
  <a href="{{ url('/login') }}" class="btn btn-spacing btn-primary">Write a Review!</a>

  @else
        <h1>Write a Review</h1>
          <hr>
          {!! Form::open(array('route' => 'reviews.store')) !!}

          <!-- Participation  -->
          {{ form::label('participation','Have you Participated in this Race?')}}
          {{ Form::select('participation', [
           '1' => 'Yes',
           '0' => 'No']
           , 'array', ['class' => 'form-control', 'style'=> 'margin-bottom: 20px;' ]
          ) }}

          <!-- Overall Rating -->
          {{ form::label('overall','Overall Rating:')}}
          {{ Form::select('overall', [1, 2, 3, 4, 5], 'S', ['class' => 'star' ]) }}

          <!-- Packet Pickup Rating -->
          {{ form::label('packet_pickup','Packet Pickup Rating:')}}
          {{ Form::select('packet_pickup', [1, 2, 3, 4, 5], 'S', ['class' => 'star' ]) }}

          <!-- Crowd Support Rating -->
          {{ form::label('crowd_support','Crowd Support Rating:')}}
          {{ Form::select('crowd_support', [1, 2, 3, 4, 5], 'S', ['class' => 'star' ]) }}

          <!-- Review Title  -->
          {{ form::label('title','Title:')}}
          {!! Form::text('title', null, array('class' => 'form-control', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Review Title')) !!}

          <!-- Race Desctiption -->
           {{ form::label('review','Review:')}}
           {!! Form::textarea('review', null, array('class' => 'form-control', 'placeholder' => 'Write a Review')) !!}

           <input name="event_id" type="hidden" value="{{$event->id}}">


           {!! Form::submit('Add Review', array('class'=>'btn btn-primary btn-lg btn-block', 'style'=> 'margin-top: 20px;')); !!}

          {!! Form::close() !!}

          @endif
    </div>

  </div>
<script type="text/javascript">
   $(function() {
      $('.star').barrating({
        theme: 'fontawesome-stars'
      });
   });
</script>

@endsection
