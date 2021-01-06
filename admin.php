<?php
require "config.php";
$query = mysqli_query($conn,"SELECT * FROM member");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Hello, admin</title>
  </head>
  <body>
  <nav class="nav bg-dark p-3">
    <a class="nav-link active" href="#">Daftar</a>
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </nav>

    <div class="container mt-5">
    <h1>Daftar member</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">id</th>
            <th scope="col">nama</th>
            <th scope="col">email</th>
            <th scope="col">telp</th>
            <th scope="col">region</th>
            <th scope="col">description</th>
            </tr>
        </thead>
        <?php
        while($result = mysqli_fetch_assoc($query)){
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $result['id'] ;?></th>
            <td><?php echo $result['name'] ;?></td>
            <td><?php echo $result['email'] ;?></td>
            <td><?php echo $result['number'] ;?></td>
            <td><?php echo $result['region'] ;?></td>
            <td><?php echo $result['description'] ;?></td>

            </tr>
        </table>
        <?php
        }
        ?>

    <h1 class="mt-5"> Daftar Content</h1>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
          
            <th scope="col">Nama produk</th>
            <th scope="col">keterangan</th>
            <th scope="col">harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
        $produk = mysqli_query($conn,"SELECT * FROM produk");
        while($result = mysqli_fetch_assoc($produk)){
         
            
        ?>
        <tbody>
            <tr>
           
            <td><?php echo $result['nama_produk'] ;?></td>
            <td><?php echo $result['keterangan'] ;?></td>
            <td><?php echo $result['harga'] ;?></td>
            <td><?php echo $result['jumlah'] ;?></td>
            <td><a href="hapus.php?name=<?php echo $result['nama_produk'];?>" class="btn btn-danger">Delete</a>
            <a href="edit.php?name=<?php echo $result['nama_produk'];?>" class="btn btn-primary">update</a>
            </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
        <tr>
            <td>
                 <a href="add.php"class="btn btn-success">Add +</a>
             </td>
        </tr>
        
        </table>
        
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
  </body>
</html>


