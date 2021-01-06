<?php
require "config.php";
$query = mysqli_query($conn,"SELECT * FROM produk");


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/home.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="jumbotron jumbotron-fluid" id="about">
    <div class="container text-center">
      <img src="src/image/Back.png" alt="" id="back">
      <h1>about me</h1>
      <p>
        More than 10 years, Arkademy Travel Services has grow at a steady pace and become one of Indonesia's leading travel agent offering a complete travel solution for both leisure and business travels. The company has over 500 staff within 24 branches across the country
      </p>
    </div>
    <section>
        <?php 
        while($result = mysqli_fetch_assoc($query)){
        ?>
        <article>
            <h1><?php echo $result['nama_produk'];?></h1>
            <p><?php echo $result['keterangan'];?></p>
            <h3><?php echo $result['harga'];?></h3>
        </article>
        <?php } ?>
    </section>
  </div>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="src/script/script.js"></script>
  </body>
</html>
