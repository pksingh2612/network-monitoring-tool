<?php
  include('session.php');
  include('connect.php');
?>
<!DOCTYPE html>
<html>
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
<body>
    <nav>    
        <a href="welcome.php">Home</a>
        <a href="logout.php">Logout</a>
    </nav>
    <div style="padding:10px;">
      <b>
      <?php
        echo "welcome ".$_SESSION['userid'];
      ?>
      </b>
    </div>

<form action="action_page.php" method="POST">
    <input type="radio" name="nwtype" value="TCP" checked> TCP<br>
    <input type="radio" name="nwtype" value="UDP"> UDP<br>
    <input type="radio" name="nwtype" value="ARP"> ARP<br>
  <select required name="choice">
    <option value="">Select one</option>
    <option value="Timestamp">Timestamp</option>
    <option value="Ip version">Ip version</option>
    <option value="Source Ip">Source Ip</option>
    <option value="Destination Ip">Destination Ip</option>
  </select>
  <input type="submit" name="submit">
</form>

</body>
</html>