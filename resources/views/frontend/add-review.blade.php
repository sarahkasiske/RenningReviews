@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

          <div class="content">
            <div class="col-md-6">
              <h1> Review a Race!</h1>
              {!! Form::open(array('url' => '/add-review')) !!}

              <div class="form-group">
                <label for="participation">Did you complete this race?</label>
                {!!  Form::select('participation', ['No', 'Yes'],  'S', ['class' => 'form-control' ]) !!}
              </div>

              <div class="form-group">
               <label for="rating">Race Rating</label>
               <p>Overall</p>
               {{ Form::select('overall', [1, 2, 3, 4, 5], 'S', ['class' => 'star' ]) }}
               <p>Packet Pickup</p>
               {{ Form::select('packet_pickup', [1, 2, 3, 4, 5], 'S', ['class' => 'star' ]) }}
               <p>Crowd Support</p>
               {{ Form::select('crowd_support', [1, 2, 3, 4, 5], 'S', ['class' => 'star' ]) }}
            </div>

            <div class="form-group">
              <label for="ReviewTitle">Review Title</label>
              {!! Form::text('title', $value = null, ['class' => 'form-control', 'placeholder' => 'Review Title']) !!}
            </div>

            <div class="form-group">
              <label for="Review">Write a Review!</label>
              {!! Form::textarea('review', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
            </div>

            {!! Form::submit('Submit Review', array('class'=>'btn btn-primary')); !!}

            {!! Form::close() !!}
          </div>

          <div class="col-md-6">
            <div id="reviewlist">
              <h2>Existing Reviews</h2>
              @foreach($reviews as $review)
              <h3>{!! $review->title !!}</h3>
              <p>{!! $review->review !!}</p>
              <p>{!! $review->participation !!}</p>
              <p>{!! $review->overall !!}</p>
              @endforeach
            </div>
          </div>

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
