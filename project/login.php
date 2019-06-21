<?php
   require('connect.php');
   session_start();
   if (isset($_POST['submit'])) {
      $userid = mysqli_real_escape_string($conn, $_POST['userid']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      if(empty($userid) || empty($password)){
         header("Location:index.html?detail=empty");
         exit();
      }else {
         $sql = "SELECT * FROM users WHERE userid = '$userid'";
         $result = mysqli_query($conn, $sql);
         $resultcount = mysqli_num_rows($result);
         if($resultcount<1){
            header("Location:index.html?login:retry");
            exit();
         }else{
            while($row = mysqli_fetch_assoc($result)){
               if($row['password']==$password){
                  echo "success"."<br>";
		  echo "welcome ".$row['userid'];
               }else{
                  echo "try again";
               }
            }
         }
      }
   } else{
      header("Location:login.html?login=error");
      exit();
   }
?>
