<?php
include("connect.php");
include("sessions_admin.php");
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

     if (isset($_POST['btn-upload'])) {
       $target = "img/banner/".basename($_FILES["fileimg"]["name"]);
       $fileimg=$_FILES['fileimg']['name'];
       $error = $_FILES['fileimg']['error'];
       $imgtype=$_FILES['fileimg']['type'];
       $ext= GetImageExtension($imgtype);
         $sdate = mysqli_real_escape_string($db, $_POST['sdate']);
         $edate = mysqli_real_escape_string($db, $_POST['edate']);
         $stime = mysqli_real_escape_string($db, $_POST['stime']);
         $etime = mysqli_real_escape_string($db, $_POST['etime']);
         $address = mysqli_real_escape_string($db, $_POST['address']);
         $latitude= mysqli_real_escape_string($db, $_POST['latitude']);
         $longitude = mysqli_real_escape_string($db, $_POST['longitude']);
         $location= mysqli_real_escape_string($db, $_POST['location']);
      $sql = "insert into techday (sdate,edate,stime,etime,address,latitude,longitude,imgpath,location) values ('$sdate','$edate','$stime','$etime','$address','$latitude','$longitude','$fileimg','$location')";
       $res=mysqli_query($db, $sql);

       if (move_uploaded_file($_FILES['fileimg']['tmp_name'],$target)) {

         $msg = "Image was uploaded successfully";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='theday.php';</script>";

       }
       else{

         $msg = "Failed to upload Image";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='theday.php';</script>";

       }

     }


     if( isset($_GET['delete']) )
   	{
     $id=$_GET['delete'];
     $delete="delete from techday where tid='$id'";
     mysqli_query($db, $delete);
     header("location: theday.php");
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      text-align: center;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body style="background:rgba(0, 0, 0, 0.9);font-family: 'Raleway';">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TECHWEEKEND</a>
    </div>
    <div class="collapse navbar-collapse" style=" text-align: center;" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="about.php">About</a></li>
        <li><a href="banners.php">Banner</a></li>
        <li><a href="agenda.php">Keynote</a></li>
        <li><a href="briefabout.php">Brief</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="speakers.php">Speaker</a></li>
        <li><a href="sponsors.php">Sponsor & Partners</a></li>
        <li><a href="stalls.php">Stall</a> </li>
        <li class="active"><a href="theday.php">The Day</a></li>
        <li><a href="blog.php">Blog</a> </li>
        <li><a href="venue.php">Venue</a></li>
        <li><a href="contact.php">FAQ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">

    <div class="col-sm-3 sidenav" style="background:#86C232;height:140%;" >
      <form method="post" role="form" action="theday.php" enctype="multipart/form-data">
           <div class="form-group">
           <input name="fileimg" type="file" id="exampleInputFile">
           <p class="help-block">Images Only</p><br>
           <input type="text" name="location" placeholder="Location"><br>
           <textarea name="address" placeholder="Address"></textarea><br>
             <input type="digit" name="latitude" placeholder="latitude"><br>
             <input type="digit" name="longitude" placeholder="longitude"><br>
             <input type="date" name="sdate" placeholder="Date"><br>
             <input type="date" name="edate" placeholder="Date"><br>
             <input type="time" name="stime" placeholder="Time"><br>
             <input type="time" name="etime" placeholder="Time"><br>
       </div>

       <button type="submit" class="btn btn-default" name="btn-upload">Upload</button>
 </form>
    </div>
    <div class="col-sm-9 text-left" style="overflow-x:auto;color:white;">
      <table class="table table-dark table-responsive">
        <?php
        $select="SELECT * FROM techday";
        $res=mysqli_query($db,$select);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
              $imageURL = 'img/banner/'.$row['imgpath'];
              $locURL = $row['location'];
              $adURL = $row['address'];
              $stURL = $row['stime'];
              $etURL = $row['etime'];
              $sdURL = $row['sdate'];
              $edURL = $row['edate'];

?>

<h2 style="text-align:center">The Day</h2>
<div class="card">
  <img class="img-responsive" src='<?php echo $imageURL;?>' style="width:100%">
  <h1><?php echo $locURL;?></h1>
  <p class="title"><?php echo $adURL;?></p>
  <p><?php echo $sdURL;?> & <?php echo $edURL;?></p>
  <p><?php echo $stURL;?> - <?php echo $etURL;?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
 </div>
<a href="theday.php?delete=<?php echo $row['tid']?>">Delete File </a>
</div>
<?php
}
}
?>
    </div>
  </div>
</div>

<footer class="container-fluid text-center navbar-fixed-bottom">
  <p>&copy;techweekend-2018</p>
</footer>

</body>
</html>
