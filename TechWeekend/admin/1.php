<?php

include("connect.php");

       if (isset($_POST['btn-upload'])) {
         $name = mysqli_real_escape_string($db, $_POST['name']);
         $sql="INSERT INTO section(name) values ('$name')";
         $res=mysqli_query($db,$sql);
         if ($res) {

         $msg = "Section Inserted";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='test.php';</script>";
        }
       else{

         $msg = "Failed to create section";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='test.php';</script>";

       }

     }
     function GetImageExtension($imagetype)
    	 {
        if(empty($imagetype)) return false;
        switch($imagetype)
        {
            case 'image/bmp': return '.bmp';
            case 'image/gif': return '.gif';
            case 'image/jpeg': return '.jpg';
            case 'image/png': return '.png';
            default: return false;
        }
      }

        if (isset($_POST['submit'])) {
          $target = "sponsors/".basename($_FILES["fileimg"]["name"]);
          $fileimg=$_FILES['fileimg']['name'];
          $error = $_FILES['fileimg']['error'];
          $imgtype=$_FILES['fileimg']['type'];
          $ext= GetImageExtension($imgtype);
          $sec = $_POST['sec'];
          $sql = "insert into creation(sec,imgpath) values ('$sec','$fileimg')";
          mysqli_query($db,$sql);

        if (move_uploaded_file($_FILES['fileimg']['tmp_name'],$target)) {

          $msg = "Item was uploaded successfully";
          echo "<script type='text/javascript'>alert('$msg');window.location.href='test.php';</script>";

        }
        else{

          $msg = "Failed to upload Image";
          echo "<script type='text/javascript'>alert('$msg');window.location.href='test.php';</script>";

        }

      }
     ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <div class="row head">
      <div class="col-md-2 logo text-center">
        <!--<img src="img/logo.png" alt="logo" class="img-fluid">-->
        <h3>TEST</h3>
      </div>
      <div class="col-md-10 hello">
        <h1><i class="fas fa-tachometer-alt"></i>SECTION</h1>
      </div>
    </div>
    <div class="row" style="height:100vh; width: 100vw;">

      <div class="col-md-10">
      <div class="container">
        <form action="test.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="banner">Section:</label>
            <div class="form-group">
            <input type="text" name="name" placeholder="Title"><br>
            </div>
          <button type="submit" class="btn btn-default" name="btn-upload">Upload</button>
          </form>
          <br>
          <div class="table-responsive table-bordered table-hover table-striped">
          <table class="table">

          </table>
        </div>
      </div>
  </div>
</div>

<div class="col-md-10">
<div class="container">
  <form action="test.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="banner">Section:</label>
    <div class="form-group">
    <select name="sec">
      <?php $select="SELECT * from section";
            $res = mysqli_query($db,$select);
            if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){?>
            <option><?php echo $row['name']; ?></option>
      <?php }} ?>
    </select>
    <input type="file" name="fileimg" id="fileimg">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Upload</button>
    </form>
    <br>
    <div class="table-responsive table-bordered table-hover table-striped">
    <table class="table">

    </table>
  </div>
</div>
</div>
</div>

</div>
</body>
</html>
