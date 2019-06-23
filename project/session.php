<?php
   include('connect.php');
   session_start();
   if(!isset($_SESSION['status'])){
      header("location:index.html?again");
      die();
   }
?>