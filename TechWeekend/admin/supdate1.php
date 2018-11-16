<?php
$var1=$_POST['PKid'];
$var2=$_POST['time'];
$var3=$_POST['date'];
$email=$_POST['email'];
include('connect.php');
$query="update workshop set time='".$var2."',date='".$var3."',status='0' where wid=".$var1;
$result=mysqli_query($db,$query) or die(mysqli_error($db));
if ($result) {
  $to = $email;
  $subject = "Regarding Registration";
    $txt = "Dear User,<br>
            Your stall has been registered for the time:<br>'$var2' and date:<br>'$var3'";
            if (mail($to,$subject,$txt)) {
              header("location:stalls.php");
            }else {
              echo "<script>alert('Email not sent');</script>";
            }
  }
  header('location:stalls.php');
 ?>
