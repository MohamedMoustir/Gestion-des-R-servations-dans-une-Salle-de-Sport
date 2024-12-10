
<?php 

 $connx = mysqli_connect('localhost', 'root', 'root', 'all_sports');

 if (!$connx) {
     die("Connection failed: " . mysqli_connect_error());
 }
 
?>