
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

</head>

<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto  rounded p-4">
        <form action="players.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 " style="border-color:orangered; box-shadow:orangered; font-size:19px" placeholder="Search for player..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Search" class="btn  btn-md rounded-0" style="background-color:orangered; font-size:16px">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list" style="font-size:16px"> 
          <!-- Here autocomplete list will be displayed -->
        </div>
      </div>
    </div>
  </div>
 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="search.js"></script>
</body>

</html>