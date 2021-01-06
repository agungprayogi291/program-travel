
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/reservation.css">
    <title>reservation</title>
  </head>
  <body>
  <div class="jumbotron jumbotron-fluid ">
    <div class="container text-center">
      <img src="src/image/Back.png" alt="" id="back">
      <h1>Reservation</h1>
      <form method="post" action="">
        <div class="form-group">
          <input type="text" class="form-control" id="inputAddress" placeholder="Input your name" name="name">
        </div>
        <div class="form-group">
           <input type="email" class="form-control" id="inputAddress2" placeholder="Input your email" name="email">
        </div>
        <div class="form-row ">
          <div class="form-group col-md-6">
            <input type="number" class="form-control" id="inputCity" placeholder="Input your number" name="telp">
          </div>
          <div class="form-group col-md-6">
            <select id="inputState" class="form-control" aria-placeholder="select your nationality" name="region">
              <option selected>Indonesia</option>
              <option>America</option>
              <option>Singapura</option>
            </select>
          </div>
        </div>
       <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="description">Explain about your Trip</textarea>
      </div>
        <button type="submit" class="btn btn-warning form-control text-white" name="submit">Submit</button>
      </form>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="src/script/script.js"></script>
  </body>
</html>

<?php
require "config.php";

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['telp'];
  $region = $_POST['region'];
  $description = $_POST['description'];

  mysqli_query($conn,"INSERT INTO member VALUES('','$name','$email','$number','$region','$description')");
  
  header("Location: home.php");
}

?>
