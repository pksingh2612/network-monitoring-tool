<?php
  include('session.php');
  include('connect.php');
  if(isset($_POST['submit']))
  $nwtype = $_POST['nwtype'];
  $choice = $_POST['choice'];
?>
<!DOCTYPE html>
<html>
<head>
      <title>options</title>
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
        <br>
        <div class="container text-center">
            <b>
            <?php
                echo $nwtype. " " .$choice;
                echo "<br><br>";
            ?>
            </b>
        </div>
        <div class="container">
            <?php
                if($nwtype == "TCP"){
                    if($choice == "Timestamp"){
                        $var = shell_exec("./t_time.sh");
                    }elseif($choice == "Source MAC"){
                        $var = shell_exec("./t_smac.sh");
                    }elseif($choice == "Destination MAC"){
                        $var = shell_exec("./t_dmac.sh");
                    }elseif($choice == "Source Ip"){
                        $var = shell_exec("./t_src.sh");
                    }elseif($choice == "Destination Ip"){
                        $var = shell_exec("./t_dstn.sh");
                    }elseif($choice == "Source Port"){
                        $var = shell_exec("./t_sport.sh");
                    }elseif($choice == "Destination Port"){
                        $var = shell_exec("./t_dport.sh");
                    }elseif($choice == "Packet Length"){
                        $var = shell_exec("./t_plen.sh");
                    }
                }elseif($nwtype == "UDP"){
                    if($choice == "Timestamp"){
                        $var = shell_exec("./u_time.sh");
                    }elseif($choice == "Source MAC"){
                        $var = shell_exec("./u_smac.sh");
                    }elseif($choice == "Destination MAC"){
                        $var = shell_exec("./u_dmac.sh");
                    }elseif($choice == "Source Ip"){
                        $var = shell_exec("./u_src.sh");
                    }elseif($choice == "Destination Ip"){
                        $var = shell_exec("./u_dstn.sh");
                    }elseif($choice == "Source Port"){
                        $var = shell_exec("./u_sport.sh");
                    }elseif($choice == "Destination Port"){
                        $var = shell_exec("./u_dport.sh");
                    }elseif($choice == "Packet Length"){
                        $var = shell_exec("./u_plen.sh");
                    }
                }elseif($nwtype == "ARP"){
                    if($choice == "Timestamp"){
                        $var = shell_exec("./a_time.sh");
                    }elseif($choice == "Source MAC"){
                        $var = shell_exec("./a_smac.sh");
                    }elseif($choice == "Destination MAC"){
                        $var = shell_exec("./a_dmac.sh");
                    }elseif($choice == "Source Ip"){
                        $var = shell_exec("./a_src.sh");
                    }elseif($choice == "Destination Ip"){
                        $var = shell_exec("./a_dstn.sh");
                    }elseif($choice == "Source Port"){
                        $msg = " UDP dont have ports";
                        header("Location: welcome.php?msg=$msg");
                    }elseif($choice == "Destination Port"){
                        $msg = "UDP dont have ports";
                        header("Location: welcome.php?msg=$msg");
                    }elseif($choice == "Packet Length"){
                        $var = shell_exec("./a_plen.sh");
                    }
                }
                echo $var;
                echo "<br><br>"."Successfully printed";
            ?>
        </div>
    </body>
</html>