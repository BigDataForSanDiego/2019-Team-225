<?php // public.php
    
    if (isset($_POST["name"])) $name = $_POST["name"];
    else $name = "none";

    echo <<<_END
    <html>
        <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
        </head>
        <body>
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">iCAN</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">My Queries</a></li>
                  <li><a href="#">Resources</a></li>
                  <li><a href="#">Community</a></li>
                </ul>
                <p class="text-right">Welcome, <b>$name</b>.</p>
              </div>
            </nav>

            <div class="container-fluid">
              <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
            </div>
            <script src="./mapscript.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBibhJM7Es-HagZaGesjhcQ2Xv9HN1r8QA&callback=myMap"></script>
        </body>
    </html>
    _END;
?>