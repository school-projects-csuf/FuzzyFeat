<?php
  include_once 'dbh.inc.php';

  $sql = "SELECT * FROM `characters` WHERE `charID` = 'batman'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $cDesc = $row['charDesc'];
  $cImg = $row['img'];
?>
