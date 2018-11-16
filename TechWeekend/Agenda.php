<?php
include('connect.php');

$queryTechday="SELECT sdate,edate FROM `techday`";
$results=mysqli_query($select_db,$queryTechday);
$rowTechday=mysqli_fetch_array($results);

$query="select keynote.kid,keynote.spkid,keynote.title,keynote.stime,keynote.etime,keynote.vid,venue.audi
        from keynote
        left join venue on keynote.vid=venue.vid
        where type = 'keynotes'";
$results=mysqli_query($select_db,$query);

$queryWork="select keynote.kid,keynote.spkid,keynote.title,keynote.stime,keynote.etime,keynote.vid,venue.audi
            from keynote
            left join venue on keynote.vid=venue.vid
            where type='workshop'";
$resultsWork=mysqli_query($select_db,$queryWork);
  ?>
<!DOCTYPE html>

<html>
<head>
  <title>Gallery</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">

  <title></title>
  <style media="screen">
  html {
    scroll-behavior: smooth;
  }
  @media (max-width: 740px) {
    html,
    body,
    header,
    #intro-section {
      height: 80vh;
    }
  }
  .regButton {
    background-color: #61892F;
    color: white;
    border: 2px solid #61892F; /* Green */
  }
  .bg1,.jumbocolor,nav{
    background-color: #222629;
  }
  .jumbocolor{
    height: 82%;
    padding-top: 5%;
  }

  .bg2{
    background-color: #86C232;
    height: 250px;
  }
  hr,.bg22{
    background-color: #86C232;
  }
  .textcolor1{
    color: #61892F;
  }
  .textcolor2{
    color: #6B6E70;
  }
  #navbarSupportedContent-3{
    padding: 0.8%;
    padding-left: 10%;
    padding-right: 7%;
  }
  @media (max-width: 991px) {
    #navbarSupportedContent-3 {
      padding-left: 1%;
      padding-right: 1%;
    }
  }
  .modal-notify .modal-header {
      border-radius: 3px 3px 0 0;
  }
  .modal-notify .modal-content {
      border-radius: 3px;
  }
  </style>
</head>
<body>
  <header>

        <!--Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark ">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3"
            aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Agenda.php">Agenda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
              </li>
            </ul>

            <!-- Social Icon  -->
            <ul class="navbar-nav nav-flex-icons">
              <li>
                <button type="button" data-toggle="modal" data-target="#orangeModalReg" class="btn regButton waves-effect">Register</button>
              </li>
              <li class="nav-item">
                <a class="nav-link">
                  <i class="fa fa-facebook fa-lg light-green-text-2"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link">
                  <i class="fa fa-twitter fa-lg light-green-text-2"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link">
                  <i class="fa fa-instagram fa-lg light-green-text-2"></i>
                </a>
              </li>

            </ul>
          </div>
        </nav>
        <!--/.Navbar -->
        <!-- Jumbotron -->
        <div class="jumbotron jumbocolor text-center white-text">

          <!-- Title -->
          <h3 class="card-title jumbocolor-item textcolor1 h4">Found it...</h3>

          <!-- Subtitle -->
          <h1 class=" h1 jumbocolor-item h1 pb-1">Our Agenda</h1>

          <!-- Grid row -->
          <div class="row d-flex ">

            <!-- Grid column -->
            <div class="col-xl-7 jumbocolor-item ">


            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Jumbotron -->
  </header>

  <main>
    <div class="container mb-4">
        <!-- Editable table -->
        <div class="card">
            <h3 class="card-header bg22 text-center font-weight-bold text-uppercase py-4">Day 1 <?php echo $rowTechday['sdate'] ?></h3>
            <div class="card-body">
                <!-- <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fa fa-plus fa-2x"
                  aria-hidden="true"></i></a></span> -->
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <tr>
                        <th class="text-center">Date</th>
                        <th class="text-center">Time</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Venue</th>
                        <th class="text-center">Speaker</th>
                        <!-- <th class="text-center">Sort</th>
                <th class="text-center">Remove</th> -->
                    </tr>
                    <?php
                      $venueRepeat="";
                      while ($row=mysqli_fetch_array($results)) {
                        if ($venueRepeat==$row['title']) {
                          continue;
                        }
                        $venueRepeat=$row['title'];
                     ?>
                    <tr>
                        <td class="pt-3-half" contenteditable="false"><?php echo $rowTechday['sdate'] ?></td>
                        <td class="pt-3-half" contenteditable="false"><?php echo $row['stime']." - ".$row['etime']; ?></td>
                        <td class="pt-3-half" contenteditable="false"><?php echo $row['title']; ?></td>
                        <td class="pt-3-half" contenteditable="false"><?php echo $row['audi']; ?></td>
                        <td class="pt-3-half" contenteditable="false">
                           <p>
                             <?php $query="select speakers.name,speakers.desig,speakers.company
                                               from keynote
                                               inner join speakers on keynote.spkid=speakers.spkid
                                               where title='".$row['title']."'";
                                       $res=mysqli_query($select_db,$query) or die(mysqli_error($select_db));
                                       while ($res1=mysqli_fetch_array($res)) {
                                         echo $res1['name'].", ";
                                         echo $res1['desig'].", ";
                                         echo $res1['company']."<br>";
                                       }
                             ?>
                           </p>
                        </td>
                        <!-- <td class="pt-3-half">
                  <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                  <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
                        aria-hidden="true"></i></a></span>
                </td>
                <td>
                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                </td> -->
                    </tr>
                  <?php } ?>
                    <!-- This is our clonable table line -->
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Guerra Cortez</td>
                        <td class="pt-3-half" contenteditable="false">45</td>
                        <td class="pt-3-half" contenteditable="false">Insectus</td>
                        <td class="pt-3-half" contenteditable="false">USA</td>
                        <td class="pt-3-half" contenteditable="false">San Francisco</td>
                        <!-- <td class="pt-3-half">
                  <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                  <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
                        aria-hidden="true"></i></a></span>
                </td>
                <td>
                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                </td> -->
                    </tr>
                    <!-- This is our clonable table line -->
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Guadalupe House</td>
                        <td class="pt-3-half" contenteditable="false">26</td>
                        <td class="pt-3-half" contenteditable="false">Isotronic</td>
                        <td class="pt-3-half" contenteditable="false">Germany</td>
                        <td class="pt-3-half" contenteditable="false">Frankfurt am Main</td>
                        <!-- <td class="pt-3-half">
                  <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                  <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
                        aria-hidden="true"></i></a></span>
                </td>
                <td>
                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                </td> -->
                    </tr>
                    <!-- This is our clonable table line -->
                    <tr class="hide">
                        <td class="pt-3-half" contenteditable="false">Elisa Gallagher</td>
                        <td class="pt-3-half" contenteditable="false">31</td>
                        <td class="pt-3-half" contenteditable="false">Portica</td>
                        <td class="pt-3-half" contenteditable="false">United Kingdom</td>
                        <td class="pt-3-half" contenteditable="false">London</td>
                        <!-- <td class="pt-3-half">
                  <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                  <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
                        aria-hidden="true"></i></a></span>
                </td>
                <td>
                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                </td> -->
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- Editable table -->
    <div class="container my-4 py-2">
        <!-- Editable table -->
        <div class="card">

            <h3 class="card-header bg22 text-center font-weight-bold text-uppercase py-4">Day 2 <?php echo $rowTechday['edate'] ?></h3>
            <div class="card-body">
                <!-- <div id="table" class="table-editable">
             <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fa fa-plus fa-2x"
                   aria-hidden="true"></i></a></span> -->
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <tr>
                        <th class="text-center">Date</th>
                        <th class="text-center">Time</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Venue</th>
                        <th class="text-center">Speaker</th>
                        <!-- <th class="text-center">Sort</th>
                 <th class="text-center">Remove</th> -->
                    </tr>
                    <?php
                      $venueRepeat="";
                      while ($row=mysqli_fetch_array($resultsWork)) {
                        if ($venueRepeat==$row['title']) {
                          continue;
                        }
                        $venueRepeat=$row['title'];
                     ?>
                    <tr>
                        <td class="pt-3-half" contenteditable="false" style=""><?php echo $rowTechday['edate'] ?></td>
                        <td class="pt-3-half" contenteditable="false"><?php echo $row['stime']." - ".$row['etime']; ?></td>
                        <td class="pt-3-half" contenteditable="false"><?php echo $row['title']; ?></td>
                        <td class="pt-3-half" contenteditable="false"><?php echo $row['audi']; ?></td>
                        <td class="pt-3-half" contenteditable="false">
                           <p>
                             <?php $query="select speakers.name,speakers.desig,speakers.company
                                               from keynote
                                               inner join speakers on keynote.spkid=speakers.spkid
                                               where title='".$row['title']."'";
                                       $res=mysqli_query($select_db,$query) or die(mysqli_error($select_db));
                                       while ($res1=mysqli_fetch_array($res)) {
                                         echo $res1['name'].", ";
                                         echo $res1['desig'].", ";
                                         echo $res1['company']."<br>";
                                       }
                             ?>
                           </p>
                        </td>                        <!-- <td class="pt-3-half">
                   <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                   <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
                         aria-hidden="true"></i></a></span>
                 </td>
                 <td>
                   <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                 </td> -->
                    </tr>
                  <?php } ?>
                    <!-- This is our clonable table line -->
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Guerra Cortez</td>
                        <td class="pt-3-half" contenteditable="false">45</td>
                        <td class="pt-3-half" contenteditable="false">Insectus</td>
                        <td class="pt-3-half" contenteditable="false">USA</td>
                        <td class="pt-3-half" contenteditable="false">San Francisco</td>
                        <!-- <td class="pt-3-half">
                   <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                   <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
                         aria-hidden="true"></i></a></span>
                 </td>
                 <td>
                   <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                 </td> -->
                    </tr>
                    <!-- This is our clonable table line -->
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Guadalupe House</td>
                        <td class="pt-3-half" contenteditable="false">26</td>
                        <td class="pt-3-half" contenteditable="false">Isotronic</td>
                        <td class="pt-3-half" contenteditable="false">Germany</td>
                        <td class="pt-3-half" contenteditable="false">Frankfurt am Main</td>
                        <!-- <td class="pt-3-half">
                   <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                   <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
                         aria-hidden="true"></i></a></span>
                 </td>
                 <td>
                   <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                 </td> -->
                    </tr>
                    <!-- This is our clonable table line -->
                    <tr class="hide">
                        <td class="pt-3-half" contenteditable="false">Elisa Gallagher</td>
                        <td class="pt-3-half" contenteditable="false">31</td>
                        <td class="pt-3-half" contenteditable="false">Portica</td>
                        <td class="pt-3-half" contenteditable="false">United Kingdom</td>
                        <td class="pt-3-half" contenteditable="false">London</td>
                        <!-- <td class="pt-3-half">
                   <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                   <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
                         aria-hidden="true"></i></a></span>
                 </td>
                 <td>
                   <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                 </td> -->
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/js/mdb.min.js"></script>
    <!-- Editable table -->
  </main>

  <!-- Footer -->
  <footer class="page-footer font-small bg1 pt-4 ">
        <!-- Footer Links -->
        <div class="container text-center text-md-left">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
              <!-- Content -->
              <h5 class="text-uppercase">Footer Content</h5>
              <p>Here you can use rows and columns here to organize your footer content.</p>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>
                <ul class=" my-4 list-unstyled">
                  <li class="my-2">
                    <a href="index.php" class="my-2">Home</a>
                  </li>
                  <li class="my-2">
                    <a href="Gallery.php" class="my-2">Gallery</a>
                  </li>
                  <li class="my-2">
                    <a href="Agenda.php" class="my-2">Agenda</a>
                  </li>
                </ul>
              </div>
              <!-- Grid column -->
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase">Social</h5>
                <ul class="list-unstyled">
                  <li>
                    <button type="button" class="btn btn-lg  light-blue darken-4"><i class="fa fa-facebook pr-1"></i> Facebook</button>                  </li>
                  <li>
                    <button type="button" class="btn unique-color"><i class="fa fa-linkedin"></i></button><button type="button" class="btn red"><i class="fa fa-youtube"></i></button>
                  </li>
                  <li>

                  </li>
                </ul>
              </div>
              <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
      <!-- JQuery -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/js/mdb.min.js"></script>
      <script type="text/javascript">
        new WOW().init();
      </script>
  </body>
</html>
