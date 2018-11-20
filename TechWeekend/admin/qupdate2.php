<?php
$var1=$_GET['PKid'];
$var2="---ignored---";
include('connect.php');
$query="update contact set answer='".$var2."' where cid=".$var1;
mysqli_query($db,$query) or die(mysqli_error($db));
header('location:contact.php');
 ?>
