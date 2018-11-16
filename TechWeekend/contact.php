<?php
include('connect.php');
$email= $_POST['email'];
$name= $_POST['name'];
$subject=$_POST['subject'];
$mesages=$_POST['message'];

/*$name= "sdsdfdsf";
$email= "sdsdfdsf";
$org= "sdsdfdsf";
$contact= 7894561230;
$querydata= "sdsdfdsf";
$type="sdsdfdsf";*/


$query="insert into contact(name,email,subject,message)values('$name','$email','$subject','$mesages')";
$res=mysqli_query($select_db,$query) or die(mysqli_error($db));
//$res=1;
if ($res) {
?>
  <div class="alert alert-success">
    <strong>Success!</strong> Feedback Submitted.
  </div>
<?php
}else {
?>
    <div class="alert alert-danger">
      <strong>Failed!</strong> Try again.
    </div>
<?php
}
?>
