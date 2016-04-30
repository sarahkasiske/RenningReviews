<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">

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

            <hr />
      




            </div>
        </div>
    </body>
</html>
