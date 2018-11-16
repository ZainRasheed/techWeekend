<?php
$var1=$_GET['PKid'];
$var2="---ignored---";
include('connect.php');
$query="update workshop set time='".$var2."',date='".$var2."',status='1' where wid=".$var1;
mysqli_query($db,$query) or die(mysqli_error($db));
header('location:stalls.php');
 ?>
