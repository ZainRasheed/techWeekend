<?php
include('connect.php');
$name= $_POST['name'];
$email= $_POST['email'];
$org= $_POST['org'];
$contact= $_POST['contact'];
$title=$_POST['title'];
$desc=$_POST['desc'];

$query="select count(*) as cnt from workshop where email='".$email."' or contact='".$contact."' or topic='".$title."'";
$result=mysqli_query($select_db,$query) or die(mysqli_error($select_db));
$row=mysqli_fetch_array($result);
if ($row['cnt']) {
  // code...?>
    <div class="alert alert-warning">
      <strong>Already regstered!</strong> some credentials already exists.
    </div>
  <?php
}else {
  // code...
    $query="insert into workshop(name,email,org,contact,des,topic)values('$name','$email','$org','$contact','$desc','$title')";
    $res=mysqli_query($select_db,$query) or die(mysqli_error($select_db));
    //$res=1;
    if ($res) {
    ?>
      <div class="alert alert-success">
        <strong>Success!</strong> Registered.
      </div>
    <?php
    }else {
    ?>
        <div class="alert alert-danger">
          <strong>Failed!</strong> Try again.
        </div>
    <?php
    }
  }
?>
