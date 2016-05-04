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
                   'January' => 'January',
                   'February' => 'February',
                   'March' => 'March',
                   'April' => 'April',
                   'May' => 'May',
                   'June' => 'June',
                   'July' => 'July',
                   'August' => 'August',
                   'September' => 'September',
                   'October' => 'October',
                   'November' => 'November',
                   'December' => 'December']
                   , 'array', ['class' => 'form-control', 'style'=> 'margin-bottom: 20px;' ]
                  ) }}

              <!-- Race City  -->
               {{ form::label('city','City:')}}
               {!! Form::text('city', null, array('class' => 'form-control', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Race City')) !!}

              <!-- Race State -->
               {{ form::label('state','State:')}}
               {!! Form::text('state', null, array('class' => 'form-control', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Race State')) !!}

               <!-- Distances  -->
               {{ form::label('race_distance','Race Distance/Distances:')}}
               {!! Form::text('race_distance', null, array('class' => 'form-control', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Enter Race Distances')) !!}

              <!-- Occurence  -->
              {{ form::label('annual_occurence','Does this Race Occur Every Year?')}}
              {{ Form::select('annual_occurence', [
                 'yes' => 'Yes',
                 'no' => 'No']
                 , 'array', ['class' => 'form-control', 'style'=> 'margin-bottom: 20px;' ]
                ) }}

              <!-- Terrain -->
              {{ form::label('terrain','Terrain:')}}

              {{ Form::select('terrain', [
                 'Flat' => 'Flat',
                 'Some Hills' => 'Some Hills',
                 'Many Hills' => 'Many Hills',
                 'Mountains' => 'Mountains']
                 , 'array', ['class' => 'form-control', 'style'=> 'margin-bottom: 20px;' ]
                ) }}

      


              <!-- Race Desctiption -->
               {{ form::label('description','Race Description:')}}
               {!! Form::textarea('description', null, array('class' => 'form-control', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Write a Description')) !!}

              <!-- Race Link  -->
              {{ form::label('link','Race Link:')}}
              {!! Form::text('link', null, array('class' => 'form-control', 'placeholder' => 'Race Link')) !!}

               {!! Form::submit('Add Race', array('class'=>'btn btn-success btn-lg btn-block', 'style'=> 'margin-top: 20px;')); !!}

              {!! Form::close() !!}


<!--
<label class="file">
  <input type="file" id="file">
  <span class="file-custom"></span>
</label> -->


            </div>
        </div>
    </div>
</div>
@endsection
