@extends('layouts.app')

@section('content')
<!-- <img src="/Orlen_Warsaw_Marathon_2014_al._KEN.JPG" alt="Mountain View"> -->
<div class="container">


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
