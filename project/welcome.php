<?php
  include('session.php');
  include('connect.php');
  if(isset($_GET['msg'])){
    $error = $_GET['msg'];
  }else{
    $error = "";
  }
?>
<!DOCTYPE html>
<html>
    <head>
      <title>welcome</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      <style>
            nav>a{
              color:white;
            }
            body{
                margin:0px;
            }
      </style>
    </head>
  <body>
      <nav class="navbar bg-dark text-light">
          <a href="welcome.php">Home</a>
          <a href="logout.php">Logout</a>
      </nav>
      <div style="padding:10px;">
        <b>
        <center>
        <?php
          echo "welcome ".$_SESSION['userid'];
        ?>
        </center>
        </b>
      </div>

    <form action="action_page.php" method="POST">
      <div class="container" style="max-width:50%;">
        <div class="form=control text-center">
          <input type="radio" name="nwtype" value="TCP" checked> TCP<br>
          <input type="radio" name="nwtype" value="UDP"> UDP<br>
          <input type="radio" name="nwtype" value="ARP"> ARP<br>
        </div>
        <select class="form-control form-control-sm" required name="choice">
          <option value="">Select one</option>
          <option value="Timestamp">Timestamp</option>
          <option value="Source MAC">Source MAC</option>
          <option value="Destination MAC">Destination MAC</option>
          <option value="Source Ip">Source Ip</option>
          <option value="Destination Ip">Destination Ip</option>
          <option value="Source Port">Source Port</option>
          <option value="Destination Port">Destination Port</option>
          <option value="Packet Length">Packet Length</option>
        </select>
        <br>
        <input class="form-control btn btn-primary" type="submit" name="submit">
      </div>
    </form>
    <br><br>
    <div class="container text-center text-danger"><?php echo $error ?></div>
  </body>
</html>