<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Quicksand:wght@700&display=swap" rel="stylesheet">

    <title>Distance Between Cities</title>
  </head>
  <body>
    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Distance between cities App.</h1>
            <p>Our app will help you calculate travelling distances.</p>
            <form action="" class="form-horizontal">
                <div class="form-group">
                    <label for="from" class="col-xs-2 control-label">From:</label>
                    <div class="col-xs-10">
                        <input type="text" id="from" placeholder="origin" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="to" class="col-xs-2 control-label">To:</label>
                    <div class="col-xs-10">
                        <input type="text" id="to" placeholder="Destination" class="form-control">
                    </div>
                </div>
            </form>
            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-info btn-lg" onclick="calcRoute();">Submit</button>

            </div>
        </div>
        <div class="container-fluid">
            <div id="googleMap">

            </div>
            <div id="output">

            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoOFNKD7U4-M7fNyxEEH4WhbVG52v2dgM"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="javascript1.js"></script>
  </body>
</html>