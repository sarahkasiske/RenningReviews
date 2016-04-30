@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="col-md-6">
              {!! Form::open(array('url' => '/add-event')) !!}

            <div class="form-group">
              <label for="ReviewTitle">Review Title</label>

                {!! Form::text('race_name', $value = null, ['class' => 'form-control', 'placeholder' => 'Race Name']) !!}
            </div>

              <div class="form-group">
              <label for="participation">In Which Month Does The Race Occur?</label>

                  {{ Form::select('month', [
                     '1' => 'January',
                     '2' => 'February',
                     '3' => 'March',
                     '4' => 'April',
                     '5' => 'May',
                     '6' => 'June',
                     '7' => 'July',
                     '8' => 'August',
                     '9' => 'September',
                     '10' => 'October',
                     '11' => 'November',
                     '12' => 'December']
                     , 'S', ['class' => 'form-control' ]
                    ) }}
              </div>

                <div class="form-group">
                  <label for="CityName">City</label>

                    {!! Form::text('city', $value = null, ['class' => 'form-control', 'placeholder' => 'City Name']) !!}
                </div>


              <div class="form-group">
                <label for="StateName">State</label>

                  {!! Form::text('state', $value = null, ['class' => 'form-control', 'placeholder' => 'State Name']) !!}

              </div>

            <div class="form-group">
            <label for="Occurence">Does This Race Happen Every Year?</label>

                  {!!  Form::select('annual_occurence', ['No', 'Yes'],  'S', ['class' => 'form-control' ]) !!}

            </div>

            <div class="form-group">
            <label for="Terrain">Terrain</label>

                  {!!  Form::select('terrain', ['Flat', 'Some Hills', 'Many Hills', 'Mountains'],  'S', ['class' => 'form-control' ]) !!}

            </div>

            <div class="form-group">
                <label for="Description">Rece Description</label>

                  {!! Form::textarea('description', $value = null, ['class' => 'form-control', 'rows' => 3,'placeholder' => 'Description']) !!}

            </div>

            <div class="form-group">
              <label for="Race Link">Race Link</label>

                {!! Form::text('link', $value = null, ['class' => 'form-control', 'placeholder' => 'Race Link']) !!}

            </div>

            {!! Form::submit('Add Race', array('class'=>'btn btn-primary space')); !!}
            {!! Form::close() !!}

        </div>

        <div class="col-md-6">
          <div id="racelist">
            <h2>Existing Races</h2>
            @foreach($events as $event)
              <h3>{!! $event->race_name !!}</h3>
              <p>{!! $event->city !!}</p>
              <p>{!! $event->state!!}</p>
              <p>{!! $event->terrain !!}</p>
              <p>{!! $event->link !!}</p>
            @endforeach
          </div>
         </div>
      </div>
    </div>
</div>
@endsection
