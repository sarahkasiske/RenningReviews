@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row">
	    <div class="col-md-10">
	      <h1>{{ $event->race_name }}</h1>
		    <hr>
		    <p> <strong>Race Month:</strong> {{ $event->month}}
		    <strong class ="margin-left" >City:</strong> {{ $event->city}}
		    <strong class ="margin-left" >State:</strong> {{ $event->state}}
		    	<strong  class ="margin-left">Is this race Annual?</strong>
						@if ($event->annual_occurence = 0)
						<span>No</span>
						@else
						<span>Yes</span>
						@endif

				 <strong class ="margin-left">Distance:</strong> {{ $event->race_distance }}</p></p>
		    <p>  {{ $event->description }}</p>
		    <p> <strong>Race Link:</strong> {{ $event->link}}</p>


	    @if (Auth::user())
	      <a href="{{  route('events.edit', $event->id) }}" class="btn btn-primary">edit</a>
	    @endif


	    <h1>Reviews</h1>
			<hr>
	    @foreach($reviews as $review)
	    @if($review->event_id == $event->id)

	    <!-- Title -->
	    <div class="panel panel-primary">

	      <div class="panel-heading">{{ $review->title }}</div>

	      <div class="panel-body">
	        <!-- Star Rating -->
	        <div class= "larger-p">
	          <label>Overall:</label>
	          @for ($i=1; $i <= 5 ; $i++)
	            <span class="{{ ($i <= $review->overall) ? 'fa fa-star' : 'fa fa-star grey'}}"></span>
	          @endfor

	          <label class ="margin-left ">Packet Pickup:</label>
	          @for ($i=1; $i <= 5 ; $i++)
	            <span class="{{ ($i <= $review->packet_pickup) ? 'fa fa-star' : 'fa fa-star grey'}}"></span>
	          @endfor

	          <label class ="margin-left ">Crowd Support:</label>
	          @for ($i=1; $i <= 5 ; $i++)
	            <span class="{{ ($i <= $review->crowd_support) ? 'fa fa-star' : 'fa fa-star grey'}}"></span>
	          @endfor
	        </div>

	        <!-- Review Copy -->
	        <p class ="review-style">{{ $review->review }}</p>
	      </div>

	   </div>

	    @endif
	    @endforeach
	      <!-- pagination links -->
	        <!-- <div class = 'text-center'>
	            {!! $reviews->links(); !!}
	        </div> -->



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


	         {!! Form::submit('Add Review', array('class'=>'btn btn-success btn-lg btn-block', 'style'=> 'margin-top: 20px;')); !!}
					 <br>

	        {!! Form::close() !!}

	        @endif
	    </div>
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
