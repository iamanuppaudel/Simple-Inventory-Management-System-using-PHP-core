<?php
$connect=mysqli_connect('localhost','root','','binaya_inventory');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link href="assets/css/bootstrap.css" rel="stylesheet">
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Inventory</title>
  </head>
  <body>
  <div class="container">
    <div class="col-md-8" style="padding-left: 25%; padding-top: 20%">
<form action="login_backend.php" class="border-bottom border-right" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="username" class="form-control" name="username" aria-describedby="nameHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" name="btnlog" class="btn btn-danger">Submit</button>
</form>
</div> <p class="text-uppercase">
                            <?php
                            if (isset($_SESSION['msg'])) {
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                            ?>
                        </p>

</div>



</body>
</html>