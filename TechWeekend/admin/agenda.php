<?php
include("connect.php");
include("sessions_admin.php");
if (isset($_POST['btn-upload'])) {
    $topic = mysqli_real_escape_string($db, $_POST['topic']);
    $stime = mysqli_real_escape_string($db, $_POST['stime']);
    $etime = mysqli_real_escape_string($db, $_POST['etime']);
    $people1 = mysqli_real_escape_string($db, $_POST['people1']);
    $venue = mysqli_real_escape_string($db, $_POST['venue']);
    $new = mysqli_real_escape_string($db, $_POST['new']);




 $sql = "insert into keynote (spkid,title,stime,etime,vid,type) values ('$people1','$topic','$stime','$etime','$venue','$new')";
  $res=mysqli_query($db, $sql);
  if(!empty($_POST['people2'])){
      $people2=mysqli_real_escape_string($db, $_POST['people2']);
  $sql = "insert into keynote (spkid,title,stime,etime,vid,type) values ('$people2','$topic','$stime','$etime','$venue','$new')";
   $res=mysqli_query($db, $sql);
 }
   if(!empty($_POST['people3'])){
       $people3 = mysqli_real_escape_string($db, $_POST['people3']);
   $sql = "insert into keynote (spkid,title,stime,etime,vid,type) values ('$people3','$topic','$stime','$etime','$venue','$new')";
    $res=mysqli_query($db, $sql);
  }
  if(!empty($_POST['people4'])){
    $people4=mysqli_real_escape_string($db, $_POST['people4']);
    $sql = "insert into keynote (spkid,title,stime,etime,vid,type) values ('$people4','$topic','$stime','$etime','$venue','$new')";
     $res=mysqli_query($db, $sql);
   }
  if ($res) {

    $msg = "Agenda uploaded successfully";
    echo "<script type='text/javascript'>alert('$msg');window.location.href='agenda.php';</script>";

  }
  else{

    $msg = "Failed to upload Agenda";
    echo "<script type='text/javascript'>alert('$msg');window.location.href='agenda.php';</script>";

  }

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
        <li class="active"><a href="agenda.php">Keynote</a></li>
        <li><a href="briefabout.php">Brief</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="speakers.php">Speakers</a></li>
        <li><a href="sponsors.php">Sponsors</a></li>
        <li><a href="partners.php">Partners</a></li>
        <li><a href="stalls.php">Stalls</a> </li>
        <li><a href="theday.php">The Day</a></li>
        <li><a href="blog.php">Blog</a> </li>
        <li><a href="venue.php">Venue</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">

    <div class="col-sm-3 sidenav" style="background:#86C232;height:100vh;" >
      <form method="post" action="agenda.php" role="form" style="border:1px solid black">
      <div id="people-container">
        <input type="text" name="topic" placeholder="Topic">
        <input type="time" name="stime" placeholder="Start time">
        <input type="time" name="etime" placeholder="End time">
        <input type="radio" name="new" value="Keynote"><label>Keynote</label></input>
        <input type="radio" name="new" value="Workshop"><label>Workshop</label></input>
        <select name="venue" placeholder="Venue">
          <?php $select="SELECT * FROM venue";
              $res=mysqli_query($db,$select);
              if(mysqli_num_rows($res)>0){
              while($row=mysqli_fetch_assoc($res)){?>
            <option name="venue" value="<?php echo $row['vid'];?>"><?php echo $row['audi'];}?><option><?php }?>
        </select>
          <h5>Speaker 1:</h5>
              <select name="people1" placeholder="Speaker Name">
                <?php $select="SELECT * FROM speakers";
                    $res=mysqli_query($db,$select);
                    if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){?>
                  <option name="people1" value="<?php echo $row['spkid'];?>"><?php echo $row['name'];}?><option><?php }?>
              </select>
      </div>

      <a href="javascript:;" id="add-new-person">Add new speaker</a>

      <p>
          <button type="submit" class="btn btn-default" name="btn-upload">Upload</button>
      </p>
  </form>
    </div>
    <div class="col-sm-9 text-left" style="overflow-x:auto;color:white;padding:1%;">
        <div class="table-responsive table-bordered">
        <?php
        # connect to mysql server
        # and select the database, on whic
        # Query the data from database.
        $query  = 'SELECT keynote.type,venue.vid,venue.audi,keynote.kid,keynote.spkid,speakers.spkid,speakers.name,keynote.title,speakers.desig,speakers.company,keynote.stime,keynote.etime FROM keynote,speakers,venue where keynote.spkid=speakers.spkid and keynote.vid=venue.vid order by keynote.stime,keynote.title';
        $result = mysqli_query($db,$query);
        # $arr is array which will be help ful during
        # printing
        $arr = array();

        # Intialize the array, which will
        # store the fetched data.
        $spk = array();
        $top = array();
        $name = array();
        $desig = array();
        $comp = array();
        $start = array();
        $end = array();
        $id = array();
        $vid = array();
        $type = array();




        while($row = mysqli_fetch_assoc($result)) {
            array_push($id,$row['kid']);
            array_push($top, $row['title']);
            array_push($spk, $row['spkid']);
            array_push($name, $row['name']);
            array_push($desig, $row['desig']);
            array_push($comp, $row['company']);
            array_push($start,$row['stime']);
            array_push($end,$row['etime']);
            array_push($vid,$row['audi']);
            array_push($type,$row['type']);


            if (!isset($arr[$row['title']])) {
                $arr[$row['title']]['rowspan'] = 0;
            }
            $arr[$row['title']]['printed'] = 'no';
            $arr[$row['title']]['rowspan'] += 1;

        }

      echo "<table cellspacing='5' cellpadding='5'>
                    <tr>
                    <th>Topic</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Venue</th>
                    <th>Type</th>
                    <th>Spk ID</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Company</th>
                    <th>Delete</th>
                </tr>";


        for($i=0; $i < sizeof($spk); $i++){

            $topics = $top[$i];
            echo "<tr>";

            # If this row is not printed then print.
            # and make the printed value to "yes", so that
            # next time it will not printed.
            if ($arr[$topics]['printed'] == 'no') {
                echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$topics."</td>";
                echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$start[$i]."</td>";
                echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$end[$i]."</td>";
              echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$vid[$i]."</td>";
              echo "<td rowspan='".$arr[$topics]['rowspan']."'>".$type[$i]."</td>";
                $arr[$topics]['printed'] = 'yes';
            }
            echo "<td>".$spk[$i]."</td>";
            echo "<td>".$name[$i]."</td>";
            echo "<td>".$desig[$i]."</td>";
            echo "<td>".$comp[$i]."</td>";?>
            <td><a href="deleteagenda.php?id=<?php echo $id[$i];?>">Delete</a></td>
            <?php
            echo "</tr>";
        }
echo"</table>";
        ?>
</div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center navbar-fixed-bottom">
  <p>&copy;techweekend-2018</p>
</footer>
<script>
let i = 2;
document.getElementById('add-new-person').onclick = function () {
    let template = `
        <h5>Speaker ${i}:</h5>
        <p>
        <select name="people${i}" placeholder="Speaker Name">
          <?php $select="SELECT * FROM speakers";
              $res=mysqli_query($db,$select);
              if(mysqli_num_rows($res)>0){
              while($row=mysqli_fetch_assoc($res)){?>
            <option name="people${i}" value="<?php echo $row['spkid'];?>"><?php echo $row['name'];}?><option><?php }?>
        </select>`;

    let container = document.getElementById('people-container');
    let div = document.createElement('div');
    div.innerHTML = template;
    container.appendChild(div);

    i++;
}
</script>
</body>
</html>
