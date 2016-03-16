<!DOCTYPE html>
<html>
    <head>
        <title>rate-comment</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

      <style>
          html, body {
              height: 100%;
          }

          body {

              padding: 0;
              width: 100%;
              display: table;
              font-weight: 300;
              font-family: 'Lato';
          }

          p {
            padding-top: 10px;
            padding-bottom: 0;
            margin-bottom: 0;
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
    <br>


        <div class="container">
          <div class="col-md-6">
            <h1> Rate a Race!</h1>
            {!! Form::open(array('url' => '/rate-comment')) !!}
            <p>comment</p>  {!! Form::text('comment') !!}
            <p>rating</p> {!! Form::text('rating') !!}
            <div class=form-input>
            <p>participation</p>  {!! Form::text('participation') !!}
              </div>
            {!! Form::submit('Rate Race'); !!}

            {!! Form::close() !!}
            </div>


            <div class="col-md-6">
              <div id="commentlist">
                <h2>Existing Comments</h2>
                  @foreach($comments as $comment)
                    <p>{!! $comment->comment!!}</p>
                  @endforeach

                <div id="ratinglist">
                  <h2>Existing ratings and Participation</h2>
                    @foreach($ratings as $rating)
                      <p>{!! $rating->rating!!}</p>
                      <p>{!! $rating->participation!!}</p>
                    @endforeach
                </div>
              </div>
        </div>
    </body>
</html>
