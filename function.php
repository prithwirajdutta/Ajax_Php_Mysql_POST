<?php
$con = mysqli_connect("localhost","root","","ajaxtestdb");
  if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $query = "insert into ajtb(fname,lname)values('$fname','$lname');";
    $result = mysqli_query($con,$query);
    if($result)
      echo "Thank You. Successful entry !";
  }

 ?>
