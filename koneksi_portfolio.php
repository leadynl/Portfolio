<!doctype html> 
<html> 
<body> 
  <?php
  $host ="localhost"; //host server
  $user ="root"; //user login phpMyAdmin
  $pass =""; //pass login phpMyAdmin
  $db ="website"; //nama database
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
  ?>
</body> 
</html>