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
        <li><a href="speakers.php">Speakers</a></li>
        <li><a href="sponsors.php">Sponsors</a></li>
        <li><a href="partners.php">Partners</a></li>
        <li class="active"><a href="stalls.php">Stalls</a> </li>
        <li><a href="theday.php">The Day</a></li>
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

      <section id="sponsor_reg">
                  <table class="table table-bordered table-responsive">
                    <?php
                    $select="SELECT * FROM workshop";
                    $res=mysqli_query($db,$select);
                    if(mysqli_num_rows($res)>0){
                      echo "<tr class='success'>
                            <th>Name</th>
                            <th>Organisation</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Topic</th>
                            <th>Description</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Approve</th>
                            <th>Reject</th>
                        </tr>";
                        while($row=mysqli_fetch_assoc($res)){
                          $descURL=$row['des'];
                          $nameURL=$row['name'];
                          $contactURL=$row['contact'];
                          $emailURL=$row['email'];
                          $orgURL=$row['org'];
                          $topURL=$row['topic'];
                          $timeURL=$row['time'];
                          $dateURL=$row['date'];
                          echo " <tr class='info'>";?>
                      <tr>
                          <td><?php echo $nameURL;?></td>
                          <td><?php echo $orgURL;?></td>
                          <td><?php echo $contactURL;?></td>
                          <td><?php echo $emailURL;?></td>
                          <td><?php echo $topURL;?></td>
                          <td><?php echo $descURL;?></td>
                          <form method="POST" action="supdate1.php">
                            <input type="hidden" name="PKid" value=<?php echo $row['wid'] ?>>
                            <input type="hidden" name="email" value=<?php echo $row['email']; ?>>
                            <?php if ($row['time']==null) {?>
                              <td style="color:black;"><input type="time" name="time"></td>
                              <td style="color:black;"><input type="date" name="date"></td>
                              <td>
                                 <button type="submit" name="button" class="btn btn-outline-success">Approve</button>
                               </td>
                               <td>
                                 <a href="supdate2.php?PKid=<?php echo $row['wid']; ?>"><button type="button" name="button" class="btn btn-outline-danger">Reject</button></a>
                              </td>

                            <?php } else {?>
                              <td><?php echo $row['time']; ?></td>
                              <td><?php echo $row['date']; ?></td>
                              <td>
                              <button type="submit" name="button" class="btn btn-outline-success" disabled>Approve</button>
                              </td>
                              <td>
                              <button type="submit" name="button" class="btn btn-outline-danger" disabled>Reject</button>
                              </td>
                              <?php } ?>
                      </tr>
                      <?php
              }
              }
              ?>
                  </table>

      </section>
  </div>
</div>
<footer class="container-fluid text-center navbar-fixed-bottom">
  <p>&copy;techweekend-2018</p>
</footer>

</body>
</html>
