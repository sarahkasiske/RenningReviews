@extends('layouts.app')

@section('content')

<!-- Write Review  -->

<div class="container">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">

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

               {!! Form::submit('Add Review', array('class'=>'btn btn-success btn-lg btn-block', 'style'=> 'margin-top: 20px;')); !!}

              {!! Form::close() !!}

            </div>
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
