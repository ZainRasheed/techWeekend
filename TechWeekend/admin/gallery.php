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
         $target = "img/gallery/".basename($_FILES["fileimg"]["name"]);
         $fileimg=$_FILES['fileimg']['name'];
         $error = $_FILES['fileimg']['error'];
         $imgtype=$_FILES['fileimg']['type'];
         $ext= GetImageExtension($imgtype);
         $sql = "insert into fusion(imgpath,type) values ('$fileimg','gallery')";
         mysqli_query($db,$sql);

       if (move_uploaded_file($_FILES['fileimg']['tmp_name'],$target)) {

         $msg = "Image/Video was uploaded successfully";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='gallery.php';</script>";

       }
       else{

         $msg = "Failed to upload Image/Video";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='gallery.php';</script>";

       }

     }
     if( isset($_GET['delete']) )
     {
     $id=$_GET['delete'];
     $delete="delete from fusion where fid='$id'";
     mysqli_query($db, $delete);
     header("location: gallery.php");
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
        <li  class="active"><a href="gallery.php">Gallery</a></li>
        <li><a href="speakers.php">Speakers</a></li>
        <li><a href="sponsors.php">Sponsors</a></li>
        <li><a href="partners.php">Partners</a></li>
        <li><a href="stalls.php">Stalls</a> </li>
        <li><a href="the day.php">The Day</a></li>
        <li><a href="blog.php">Blog</a> </li>
        <li><a href="venue.php">Venue</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">

    <div class="col-sm-3 sidenav" style="background:#86C232;" >
      <form action="gallery.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="banner">Gallery:</label>
          <input type="file" name="fileimg" id="fileimg">
        </div>
        <button type="submit" class="btn btn-default" name="btn-upload">Upload</button>
      </form>
    </div>
    <div class="col-sm-9 text-left" style="color:white;">
      <table class="table table-dark table-responsive">
        <?php
        $select="SELECT * FROM fusion where type='gallery'";
        $res=mysqli_query($db,$select);
        if(mysqli_num_rows($res)>0){
          echo "<tr>
                <th style='text-align:center;'>Gallery ID</th>
                <th style='text-align:center;'>Gallery Image</th>
                <th style='text-align:center;'>Delete</th>
            </tr>";
            while($row=mysqli_fetch_assoc($res)){
              $idU=$row['fid'];
              $imageURL = 'img/gallery/'.$row['imgpath'];
              echo " <tr>";?>
        <td><h4 style="text-align:center; overflow:hidden"><?php echo $idU;?></h4></td>
        <td><img class="img-responsive" src='<?php echo $imageURL;?>' style="height:150px; width:150px; margin:auto;"></td>
        <td>        <a href="gallery.php?delete=<?php echo $row['fid']?>">Delete</a>
</td>
      </tr>
      <?php
      }
      }
      ?>
</table>
    </div>
  </div>
</div>

<footer class="container-fluid text-center navbar-fixed-bottom">
  <p>&copy;techweekend-2018</p>
</footer>

</body>
</html>
