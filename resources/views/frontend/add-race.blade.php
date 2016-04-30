<!DOCTYPE html>
<html>
    <head>
        <title>Add a Race</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            p { padding-top: 10px;
              padding-bottom: 0;
              margin-bottom: 0;
            }

            body {
                margin: 70;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 300;
                font-family: 'Lato';
            }

            .container {
                text-align: center;

                vertical-align: middle;

            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .form-input {
              text-align: center;
              padding-bottom: 20px;
            }

        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="/add-race/#add-race" class="navbar-brand">Add Race</a>
              <a class="navbar-brand" href="/rate-comment/#comment/rate" >Comment and Rate</a>
            </div>

          </div>
        </nav>

      <br>
      <br>
      <br>

        <div class="container">
              <div class="col-md-6">

              {!! Form::open(array('url' => '/add-race')) !!}
              <h1> Add a Race!</h1>
              <p>Race Name</p> {!! Form::text('name') !!}
              <p>Description</p> {!! Form::text('description') !!}
              <p>Location</p> {!! Form::text('location') !!}
              <p>Race Type</p>{!! Form::text('type') !!}
              <p>Total Elevation Gain</p>{!! Form::text('elevation_gain') !!}
              <div class=form-input>
              <p>Race Month</p>{!! Form::text('race_month') !!}
              </div>
              {!! Form::submit('Create race'); !!}
              {!! Form::close() !!}

            </div>
            <div class="col-md-6">

            <div id="racelist">
                <h2>Existing Races</h2>
                @foreach($races as $race)
                  <h3>{!! $race->name !!}</h3>
                  <p>{!! $race->description !!}</p>
                @endforeach
            </div>
            </div>

        </div>
    </body>
</html>
