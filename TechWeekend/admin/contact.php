<?php
include("connect.php");
include("sessions_admin.php");
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
    td{
      color:white;
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
        <li><a href="theday.php">The Day</a></li>
        <li><a href="blog.php">Blog</a> </li>
        <li><a href="venue.php">Venue</a></li>
        <li class="active"><a href="contact.php">FAQ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <?php $query="select * from contact";
    $result= mysqli_query($db,$query) or die(mysqli_error($db));?>
    <table class="table table-bordered table-responsive">

      <!--Table head-->
      <thead>
        <tr class='success'>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Message</th>
          <th>Answer</th>
          <th>Status</th>
          <th>Select</th>
        </tr>
      </thead>
      <!--Table head-->

      <!--Table body-->
      <tbody>
        <?php
        $slno=0;
         while ( $row=mysqli_fetch_array($result)) {
        $slno++;
           ?>
          <form action="qupdate1.php" method="post">
        <tr>
          <th scope="row"><?php echo $slno ?></th>
            <input type="hidden" name="PKid" value=<?php echo $row['cid'] ?>>
            <input type="hidden" name="email" value=<?php echo $row['email']; ?>>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><?php echo $row['subject'] ?></td>
          <td><?php echo $row['message'] ?></td>


          <?php if ($row['answer']==null) {?>
            <td> <textarea required row=50 column=100 name='textarea'></textarea></td>
            <td> <p class="text-muted">Please answer!</p> </td>
            <td>
               <button type="submit" name="button" class="btn btn-outline-success">Submit</button>
               &nbsp
               <a href="qupdate2.php?PKid=<?php echo $row['cid']; ?>"><button type="button" name="button" class="btn btn-outline-danger">Ignore</button></a>
            </td>

          <?php }else {?>
            <td><?php echo $row['answer']; ?></td>
            <td>
            <button type="submit" name="button" class="btn btn-outline-success" disabled>Submit</button>
            &nbsp
            <button type="submit" name="button" class="btn btn-outline-danger" disabled>Ignore</button>
            </td>
            <?php } ?>
        </tr>
      </form>
      <?php } ?>
      </tbody>
      <!--Table body-->
    </table>
      </section>
  </div>
</div>
<footer class="container-fluid text-center navbar-fixed-bottom">
  <p>&copy;techweekend-2018</p>
</footer>

</body>
</html>
