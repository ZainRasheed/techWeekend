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
  #img1 .img-fluid{
    height: 55vh;
    width: 100%;
  }
  #img2 .img-fluid{
    height: 35vh;
    width: 100%;
  }
  #img3 .img-fluid{
    height: 45vh;
    width: 100%;
  }
  @media (max-width: 740px) {
    #img1 .img-fluid,
    #img2 .img-fluid,
    #img3 .img-fluid{
      max-width: 100%;
      height: 80vh;
    }
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
          <h3 class="card-title jumbocolor-item textcolor1 h4">Here we are</h3>

          <!-- Subtitle -->
          <h1 class=" h1 jumbocolor-item h1 py-1">Gallery!</h1>

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
      <div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center bg22">
              <h4 class="modal-title white-text w-100 font-weight-bold py-2" >Subscribe</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>

            <!--Body-->
            <div class="modal-body">
              <div class="md-form mb-5">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="form3" class="form-control validate" placeholder="Your Name">
              </div>

              <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="email" id="form2" class="form-control validate" placeholder="Email">
              </div>
              <div class="md-form mb-5">
                <i class="fa fa-phone prefix grey-text"></i>
                <input type="text" id="form3" class="form-control validate" placeholder="Contact">
              </div>
              <div class="md-form mb-5">
                <i class="fa fa-group prefix grey-text"></i>
                <input type="text" id="form3" class="form-control validate" placeholder="Organization">
              </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <a type="button" class="btn waves-effect" style="color:#61892F;">Send <i class="fa fa-paper-plane-o ml-1"></i></a>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
    <main>
      <div class="container-fluid">

        <?php
        include('connect.php');
        $query="select * from fusion where type='gallery'";
        $results=mysqli_query($select_db,$query);
        $rowCount=mysqli_num_rows($results);
        $rowExtraCount=$rowCount%6;
        $count=0;
        $Imgarray=array();
        while ($row=mysqli_fetch_array($results)) {
          $count1=$count%6;
          array_push($Imgarray,$row['imgpath']);
//          if ($rowCount<6) {
//            if (($count+1)==$rowCount) {
//              alpha($Imgarray);
//            }
//          }else {
            if ($count1==5) {
              alpha($Imgarray);
              $Imgarray=array();
            }
  //        }
          $count++;
        }
        if ($count1==($rowExtraCount-1)) {
          alpha($Imgarray);
        }
        ?>
      </div>
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
<?php
function beta($Imgarray){
  echo $Imgarray[0];
}
function alpha($Imgarray) { ?>
  <!-- Grid row -->
  <div id="img1" class="row">

    <!-- Grid column -->
    <div class="col-md-12 mb-3">

      <img src="admin/img/gallery/<?php echo $Imgarray[0]; ?>" class="img-fluid wow fadeInUp z-depth-1" alt="">

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <!-- Grid row -->
  <div id="img2" class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-3">

      <img  src="admin/img/gallery/<?php echo $Imgarray[1]; ?>" class="img-fluid wow fadeInUp z-depth-1"
        alt="">

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-3">

      <img src="admin/img/gallery/<?php echo $Imgarray[2]; ?>" class="img-fluid wow fadeInUp z-depth-1"
        alt="">

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-3">

      <img src="admin/img/gallery/<?php echo $Imgarray[3]; ?>" class="img-fluid wow fadeInUp z-depth-1"
        alt="">

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <!-- Grid row -->
  <div id="img3" class="row">

    <!-- Grid column -->
    <div class="col-md-6 mb-3">

      <img src="admin/img/gallery/<?php echo $Imgarray[4]; ?>" class="img-fluid wow fadeInUp z-depth-1"
        alt="">

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-6 mb-3">

      <img src="admin/img/gallery/<?php echo $Imgarray[5]; ?>" class="img-fluid wow fadeInUp z-depth-1"
        alt="">

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
<?php } ?>
