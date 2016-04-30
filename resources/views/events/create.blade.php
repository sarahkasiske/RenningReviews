@extends('layouts.app')
@section('content')

<!-- Add Race  -->

<div class="container">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h1>Add a Race</h1>
              <hr>
              {!! Form::open(array('route' => 'events.store')) !!}

               <!-- Race Name  -->
               {{ form::label('race_name','Race Name:')}}
               {!! Form::text('race_name', null, array('class' => 'form-control', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Race Name')) !!}

               <!-- Slug -->
               {{ form::label('slug','URL')}}
               {!! Form::text('slug', null, array('class' => 'form-control', 'required', 'minlength' => '5','maxlength' => '255', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Race Name')) !!}

               <!-- Race Month  -->
                {{ form::label('month','Race Month:')}}
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
                   , 'array', ['class' => 'form-control', 'style'=> 'margin-bottom: 20px;' ]
                  ) }}
              <!-- Race City  -->
               {{ form::label('city','City:')}}
               {!! Form::text('city', null, array('class' => 'form-control', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Race City')) !!}

              <!-- Race State -->
               {{ form::label('state','State:')}}
               {!! Form::text('state', null, array('class' => 'form-control', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Race State')) !!}

              <!-- Occurence  -->
              {{ form::label('annual_occurence','Does this Race Occur Every Year?')}}
              {{ Form::select('annual_occurence', [
                 '1' => 'Yes',
                 '0' => 'No']
                 , 'array', ['class' => 'form-control', 'style'=> 'margin-bottom: 20px;' ]
                ) }}

              <!-- Terrain -->
              {{ form::label('terrain','Terrain:')}}
              {!!  Form::select('terrain', ['Flat', 'Some Hills', 'Many Hills', 'Mountains'],  'S', ['class' => 'form-control', 'style'=> 'margin-bottom: 20px;' ]) !!}


              <!-- Race Desctiption -->
               {{ form::label('description','Race Description:')}}
               {!! Form::textarea('description', null, array('class' => 'form-control', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Write a Description')) !!}

              <!-- Race Link  -->
              {{ form::label('link','Race Link:')}}
              {!! Form::text('link', null, array('class' => 'form-control', 'placeholder' => 'Race Link')) !!}

               {!! Form::submit('Add Race', array('class'=>'btn btn-success btn-lg btn-block', 'style'=> 'margin-top: 20px;')); !!}

              {!! Form::close() !!}






            </div>
        </div>
    </div>
</div>
@endsection
