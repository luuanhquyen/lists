<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="/jquery.min.js"></script>
    <script src="/jquery.rest.min.js"></script> 

    <title>Hello, world!</title>
  </head>
  <body>
    <h1> Lists selected sample <br /></h1>


    <div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="col-sm" >
                <ul class="list-group list-group-flush" id="lefts">
                </ul>
            </div>
            <div class="col-sm">
            <button onclick="toRight()">To Right</button> <br /><br />
            <button onclick="toLeft()">To Left</button> <br /><br />
            <button onclick="submit()">Submit</button><br />
            </div>
            <div class="col-sm">
                <ul class="list-group list-group-flush" id="rights">
                
                </ul>
        </div>
    </div>


    <textarea id="result" name="w3review" rows="4" cols="50"></textarea>


    


    <script src="/app.js"></script>
</body>
</html>