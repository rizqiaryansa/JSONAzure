<?php
include 'koneksi.php';

$myArray = array();
      if ($result = mysqli_query($conn, "SELECT * FROM harga")) {
      	while($row = mysqli_fetch_assoc($result)) {
            header('content-type:application/json');
            $myArray[] = $row;
            }
      echo json_encode($myArray);    
      }
  mysqli_close($conn);
?>