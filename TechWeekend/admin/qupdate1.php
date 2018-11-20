<?php
$var1=$_POST['PKid'];
$var2=$_POST['textarea'];
$email=$_POST['email'];
include('connect.php');
$query="update contact set answer='".$var2."' where cid=".$var1;
$result=mysqli_query($db,$query) or die(mysqli_error($db));
if ($result) {
  $to = $email;
  $subject = "";
    $txt = "Dear User,<br>
            Answer for or your query:<br>'$var2'";
            if (mail($to,$subject,$txt)) {
              header("location:contact.php");
            }else {
              echo "Mail couldn't be sent try again";
            }
  }
header('location:contact.php');
 ?>
