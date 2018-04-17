<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 21 Ajax Muster</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/css/styles.css">    
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/ajax.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">                
                <div class="col-12 col-lg-10 col-md-10 col-sm-10 col-xl-10 bg-warning pt-5 pb-5">
                    <h2>AJAX 2</h2>
                    <hr>
                    <div id="output">MyOutput</div>
                    <hr>
                    <!--button class="btn btn-outline-dark">getData</button-->
                    <button class="btn btn-outline-dark" value="Berlin">Berlin/Germany</button>
                    <button class="btn btn-outline-dark" value="Phuket">Phuket/Thailand</button>
                    <button class="btn btn-outline-dark" value="Palma">Palma/Mallorca</button>
                    <button class="btn btn-outline-dark" value="Santorini">Santorini/Greece</button>
                </div>                
            </div>
        </div>
        <script>
          (function () {
//              var btns = [];
//              btns = document.querySelectorAll('button');
//              var output = document.querySelector('#output');
//              for (var i = 0; i < btns.length; i++) {
//                  //var btn[i] = document.querySelector('button'); //ermöglicht die Verwendung von CSS-Selektoren wie # und .
//
//                  btns[i].addEventListener('click', ajaxPost);
//              }              
          })();
        </script>
    </body>
</html>
