<?php
include("sessions_admin.php");
     	include_once('connect.php');
     	if( isset($_GET['edit']) )
     	{
     		$id = $_GET['edit'];
     		$res= mysqli_query($db,"SELECT * FROM fusion WHERE fid='$id' and type='aboutbrief'");
     		$row= mysqli_fetch_assoc($res);
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

     	if( isset($_POST['insert']))
     	{
         $target = "img/banner/".basename($_FILES["newfileimg"]["name"]);
         $newfileimg=$_FILES['newfileimg']['name'];
         $error = $_FILES['newfileimg']['error'];
         $imgtype=$_FILES['newfileimg']['type'];
         $ext= GetImageExtension($imgtype);
         $id=$_POST['id'];
         $newpara=$_POST['about'];
         if(!empty($_FILES['newfileimg']['name'])) //new image uploaded
     {
        $sql = "UPDATE fusion SET imgpath='$newfileimg',para='$newpara',type='aboutbrief' WHERE fid='$id'";
        if (move_uploaded_file($_FILES['newfileimg']['tmp_name'],$target)) {

          $msg = "About text was updated successfully";
          echo "<script type='text/javascript'>alert('$msg');window.location.href='about.php';</script>";

        }
        else{

          $msg = "Failed to update the about text";
          echo "<script type='text/javascript'>alert('$msg');window.location.href='about.php';</script>";

        }
      }
     else // no image uploaded
     {
        // save data, but no change the image column in MYSQL, so it will stay the same value
         $sql = "UPDATE fusion SET para='$newpara',type='aboutbrief' WHERE fid='$id'";
     }

         $res 	 = mysqli_query($db,$sql) or die("Could not update");
       		echo "<meta http-equiv='refresh' content='0;url=about.php'>";
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
        <li  class="active"><a href="about.php">About</a></li>
        <li><a href="banners.php">Banner</a></li>
        <li><a href="agenda.php">Keynote</a></li>
        <li><a href="briefabout.php">Brief</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="speakers.php">Speakers</a></li>
        <li><a href="sponsors.php">Sponsors</a></li>
        <li><a href="partners.php">Partners</a></li>
        <li><a href="theday.php">The Day</a></li>
        <li><a href="stalls.php">Stalls</a> </li>
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
      <form action="editabout.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="about">About:</label>
            <?php $imageURL = 'img/banner/'.$row['imgpath'];?>
          <img class="img-responsive" src ='<?php echo $imageURL; ?>' style="height:150px; width:150px; border-radius:50%; margin:auto">
          <input type="file" name="newfileimg" id="fileimg">
            <input type="text" name="about" value='<?php echo $row['para']; ?>' placeholder="Text">
            <input type="hidden" name="id" value="<?php echo $row['fid']; ?>">
        </div>
        <button type="submit" class="btn btn-default" name="insert">Upload</button>
      </form>
    </div>

  </div>
</div>

<footer class="container-fluid text-center navbar-fixed-bottom">
  <p>&copy;techweekend-2018</p>
</footer>

</body>
</html>
