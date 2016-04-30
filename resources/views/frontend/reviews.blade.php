<!DOCTYPE html>
<html>
    <head>
        <title>reviews</title>

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
             Hello {!! $obj->firstName !!}

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
    </body>
</html>
