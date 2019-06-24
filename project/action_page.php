<?php
  include('session.php');
  include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
nav {
  left: 0;
  width: 100%;
  padding: 5px;
  background-color: red;
  color: white;
}
body{
    margin:0px;
}
</style>

</head>
<body>
    <nav>    
        <a href="welcome.php">Home</a>
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>
<?php
if(isset($_POST['submit']))
    $nwtype = $_POST['nwtype'];
    $choice = $_POST['choice'];
    echo $choice;
    echo "<br><br>";
    if($nwtype == "TCP"){
        if($choice == "Timestamp"){
            $var = shell_exec("./t_time.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }elseif($choice == "Source MAC"){
            $var = shell_exec("./t_smac.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }elseif($choice == "Ip version"){
            $var = shell_exec("./t_ipv.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }elseif($choice == "Source Ip"){
            $var = shell_exec("./t_src.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }elseif($choice == "Destination Ip"){
            $var = shell_exec("./t_dstn.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }
    }elseif($nwtype == "UDP"){
        if($choice == "Timestamp"){
            $var = shell_exec("./udp_time.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }elseif($choice == "Ip version"){
            $var = shell_exec("./udp_ipv.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }elseif($choice == "Source Ip"){
            $var = shell_exec("./udp_src.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }elseif($choice == "Destination Ip"){
            $var = shell_exec("./udp_dstn.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }
    }elseif($nwtype == "ARP"){
        if($choice == "Timestamp"){
            $var = shell_exec("./a_time.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }elseif($choice == "Ip version"){
            header('Location: welcome.php');
        }elseif($choice == "Source Ip"){
            $var = shell_exec("./a_src.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }elseif($choice == "Destination Ip"){
            $var = shell_exec("./a_dstn.sh");
            echo $var;
            echo "<br><br>"."Successfully printed";
        }
    }
?>




<!-- exec("./break.sh");
        $myfle = "ping.txt";
        $fh = fopen($myfle, 'r');
        $fulldata = fread($fh, filesize($myfle));
        fclose($fh);
        echo $fulldata; -->