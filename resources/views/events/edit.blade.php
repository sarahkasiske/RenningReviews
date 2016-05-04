@extends('layouts.app')

@section('content')

<!-- View Race  -->
  <div class="col-md-6 col-md-offset-1">
    {!! Form::model($event, ['route' => ['events.update', $event->id], 'method' => 'PUT']) !!}

     <!-- Race Name  -->
     {{ form::label('race_name','Race Name:')}}
     {!! Form::text('race_name', null, array('class' => 'form-control', 'style'=> 'margin-bottom: 20px;', 'placeholder' => 'Race Name')) !!}

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
       '1' => 'Yes',
       '0' => 'No']
       , 'array', ['class' => 'form-control', 'style'=> 'margin-bottom: 20px;' ]
      ) }}

    <!-- Terrain -->
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

   </div>
  <div class="row">
   <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
        <dt>Created At: Date</dt>
        <dd>{{date('M j, Y', strtotime($event->created_at)) }}</dd>
        </dl>

        <dl class="dl-horizontal">
        <dt>Last Updated</dt>
        <dd>{{date('M j, Y', strtotime($event->updated_at)) }}</dd>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
              {!! Html::linkRoute('events.show', 'Cancel', array($event->id), array('class' => 'btn btn-danger btn-block')) !!}
          </div>

          <div class="col-sm-6">
             {!! Form::submit('Save Changes', array('class'=>'btn btn-success btn-block')); !!}
          </div>

        </div>
      </div>
   </div>
   <!-- {!! Form::close() !!}
   {!! Form::open([
            'method' => 'DELETE',
            'route' => ['events.destroy', $event->id]
        ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!} -->
   </div>

@endsection
