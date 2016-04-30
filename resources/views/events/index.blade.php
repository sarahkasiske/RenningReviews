@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-1">
    <h1>All Posts</h1>
  </div>

    <div class="col-md-2">
      <a href="{{ route('events.create') }}" class="btn btn-h1-spacing btn-block btn-primary btn-primary">Add Race</a>
    </div>


</div>
    <hr>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <table class="table">
          <thead>
            <th>#</th>
            <th>Race Name</th>
            <th>Description</th>
            <th>Created At</th>
            <th></th>

          </thead>
          <tbody>

            @foreach($events as $event)

              <tr>
                <th>{{ $event->id }}</th>
                <td>{{ $event->race_name }}</td>
                <td>{{ substr($event->description, 0, 50) }} {{ strlen($event->description) > 50 ? "..." : "" }}</td>
                <td>{{ date('M j, Y', strtotime ($event->created_at)) }}</td>
                <td><a href="{{  route('events.show', $event->id) }}" class="btn btn-default btn-sm">view</a> <a href="{{  route('events.edit', $event->id) }}" class="btn btn-default btn-sm">edit</a> </td>

              </tr>

            @endforeach

          </tbody>
        </table>

        <div class = 'text-center'>
          {!! $events->links(); !!}

      </div>
    </div>


@endsection
