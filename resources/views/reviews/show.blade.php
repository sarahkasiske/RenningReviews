@extends('layouts.app')

@section('content')

<!-- View Review  -->
  <div class="col-md-6 col-md-offset-1">
      <h1>{{ $review->title }}</h1>

      <hr>
      <p> <strong>Did you Participate in the Race? </strong> {{ $review->participation}}</p>

      <p> <strong>Overall Rating: </strong> {{ $review->overall}}</p>

      <p> <strong>Packet Pickup Rating: </strong> {{ $review->packet_pickup}}</p>

      <p> <strong>Crowd Support Rating</strong> {{ $review->crowd_support}}</p>

      <p> <strong>Review:</strong> {{ $review->review }}</p>

   </div>
   <div class="row">
    <div class="col-md-4">
       <div class="well">
         <dl class="dl-horizontal">
         <dt>Created At: Date</dt>
         <dd>{{date('M j, Y', strtotime($review->created_at)) }}</dd>
         </dl>

         <dl class="dl-horizontal">
         <dt>Last Updated</dt>
         <dd>{{date('M j, Y', strtotime($review->updated_at)) }}</dd>
         </dl>
         <hr>
         <div class="row">
           <div class="col-sm-12">
             {!! Html::linkRoute('reviews.edit', 'Edit', array($review->id), array('class' => 'btn btn-primary btn-block')) !!}

           </div>

         </div>
       </div>
    </div>
    </div>

@endsection
