<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
      integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
      crossorigin=""/>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />
    <title>tech weekend</title>
    <style media="screen">

    @media (max-width: 740px) {
      html,
      body,
      header,
      #intro-section {
        height: 100vh;
      }
    }
    #img2 .img-fluid{
      height: 35vh;
      width: 100%;
    }
    #img3 .img-fluid{
      height: 50vh;
      width: 100%;
    }
    @media (max-width: 768px) {
      #img2 .img-fluid,
      #img3 .img-fluid{
        max-width: 100%;
        height: 50vh;
      }
    }
    .fa-facebook:hover{
        color:#29487d
    }
    .fa-instagram:hover{
        border-radius: 5px;
        color: #fff;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
    }
    .fa-linkedin:hover{
        color: #0077B5;
    }

    .fa-twitter:hover{
        color:#1DA1F2;
    }

    /* subfooter */

    #sub-footer{
        text-align: center;
        background: #333;
        color: #000;
        padding-top: 10px;
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
      padding-top: 8%;
    }

    .bg2{
      background-color: #86C232;
      height: 250px;
    }
    .bg22{
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
    .cd1{
           text-align: center;
           background-color: #474B4F;
           color: white;
           border-radius: 50%;
       }
      .cd1:hover{
         background-color: #0072ff;
         transform: scale(1.1);
        }

      .btn:hover{
          transform: scale(1.1);
        }

      #mapid { height: 400px; }

      img{
        height: 30vh;
      }
      hr,.heh {
         background: -webkit-linear-gradient(left, #00c6ff,#0072ff);
         background: -o-linear-gradient(right, #00c6ff ,#0072ff);
         background: -moz-linear-gradient(right, #00c6ff,#0072ff);
         background: linear-gradient(to right, #00c6ff,#0072ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      .foot:hover, .foot:active,.head:hover, .head:active {font-size: 110%;}
      .foot:hover, .foot:active{color: blue;}
      /*hover effect */
      .hovereffect {
        width: 100%;
        height: 100%;
        float: left;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
      }

      .hovereffect .overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
      }

      .hovereffect .hoverover{
        display: block;
        position: relative;
        -webkit-transition: all 0.4s ease-in;
        transition: all 0.4s ease-in;
      }

      .hovereffect:hover .hoverover{
        filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feColorMatrix type="matrix" color-interpolation-filters="sRGB" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0" /><feGaussianBlur stdDeviation="3" /></filter></svg>#filter');
        filter: grayscale(1) blur(3px);
        -webkit-filter: grayscale(1) blur(3px);
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
      }

      .hovereffect h2 {
        text-transform: uppercase;
        text-align: center;
        position: relative;
        font-size: 17px;
        padding: 10px;
        background: rgba(0, 0, 0, 0.6);
      }

      .hovereffect a.info {
        display: inline-block;
        text-decoration: none;
        padding: 7px 14px;
        border: 1px solid #fff;
        margin: 50px 0 0 0;
        background-color: transparent;
      }

      .hovereffect a.info:hover {
        box-shadow: 0 0 5px #fff;
      }

      .hovereffect a.info, .hovereffect h2 {
        -webkit-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
        -webkit-transition: all 0.4s ease-in;
        transition: all 0.4s ease-in;
        opacity: 0;
        filter: alpha(opacity=0);
        color: #fff;
        text-transform: uppercase;
      }

      .hovereffect:hover a.info, .hovereffect:hover h2 {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
      }

    </style>
  </head>
  <body>
    <header>

          <!--Navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="navbar-brand" href="#"><img src="images/Logo_with_name_color.png" style="height:60px;width:140px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3"
              aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="head nav-link" href="#home">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="head nav-link" href="#About">About</a>
                </li>
                <li class="nav-item">
                  <a class="head nav-link" href="#Description">Features</a>
                </li>
                <li class="nav-item">
                  <a class="head nav-link" href="Agenda.php">Agenda</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="head nav-link dropdown-toggle" id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">People with us
                  </a>
                  <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-3">
                    <a class="head dropdown-item" href="#Speakers">Speakers</a>
                    <a class="head dropdown-item" href="#Partners">Sponsers</a>
                    <a class="head dropdown-item" href="#Partners">Partners</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="head nav-link" href="#Gallery">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="head nav-link" href="#workWithUs">Work with us</a>
                </li>
              </ul>

              <!-- Social Icon  -->
              <ul class="navbar-nav nav-flex-icons">
                <li>
                  <button type="button" data-toggle="modal" data-target="#orangeModalReg" class="blue-gradient btn waves-effect">Register</button>
                </li>
                <li>
                  <a href="#contactus"><button type="button" class="btn blue-gradient px-3"><i class="fa fa-phone" aria-hidden="true"></i></button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">
                    <i class="fa fa-facebook fa-lg light-green-text-2"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">
                    <i class="fa fa-linkedin fa-lg light-green-text-2"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">
                    <i class="fa fa-instagram fa-lg light-green-text-2"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">
                    <i class="fa fa-twitter fa-lg light-green-text-2"></i>
                  </a>
                </li>

              </ul>
            </div>
          </nav>
          <!--/.Navbar -->
          <!-- Jumbotron -->
          <?php
            include('connect.php');
            $query="select * from fusion";
            $result=mysqli_query($select_db,$query) or die(mysqli_error($select_db));
            while ($row=mysqli_fetch_array($result)) {
              switch ($row['type']) {
                case 'banner':
                    $arrayHead = array('img' => $row['imgpath'],'para' => $row['para'] );
                  break;
                case 'aboutbrief':
                    $arrayBrief = array('img' => $row['imgpath'],'para' => $row['para'] );
                  break;
                case 'about':
                    $arrayAbout = array('para' => $row['para'] );
                  break;
              }
            }
           ?>
          <div id='home' class="jumbotron jumbocolor white-text">

            <!-- Title -->
            <h3 class="card-title jumbocolor-item heh h3"><?php echo $arrayHead['para']; ?></h3>

            <!-- Subtitle -->
            <h1 class="h1 jumbocolor-item ">Tech Weekend is here!</h1>
      <!--      <div class="container-fluid">
              <div class="row">
                <div class="col-md-4">
                  <img src="admin/img/banner/<?php //echo $arrayHead['img']; ?>" class="img-fluid z-depth-1" alt="Tech Weekend is here">
                </div>
              </div>
            </div> -->

            <!-- Grid row -->
            <div class="row d-flex ">

              <!-- Grid column -->
              <div class="col-xl-7 jumbocolor-item ">

                <p class="card-text mt-3 textcolor2"> <?php echo $arrayAbout['para']; ?> </p>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Jumbotron -->
    </header>

    <main>
      <section class="mb-4" id="timer">
          <div class="container ">
              <div class="row justify-content-center">
                  <div class="col-md-9 xs-3">
                      <div class="card-group">

                          <div class="card cd1 mr-4 wow fadeInLeft">
                              <div class="card-body">
                                  <!-- <h5 class="card-title">Panel title</h5> -->
                                  <p>Days</p>
                                  <h2 id="days">0</h2>
                                  <!-- <a class="card-link">Card link</a>
                    <a class="card-link">Another link</a> -->
                              </div>
                          </div>
                          <div class="card cd1 mr-4 wow fadeInUp" >
                              <div class="card-body">
                                  <!-- <h5 class="card-title">Panel title</h5> -->
                                  <p>Hours</p>
                                  <h2 id="hours">0</h2>
                                  <!-- <a class="card-link">Card link</a>
                            <a class="card-link">Another link</a> -->
                              </div>
                          </div>
                          <div class="card cd1 mr-4 wow fadeInUp" >
                              <div class="card-body">
                                  <!-- <h5 class="card-title">Panel title</h5> -->
                                  <p>Minutes</p>
                                  <h2 id="minutes">0</h2>
                                  <!-- <a class="card-link">Card link</a>
                                    <a class="card-link">Another link</a> -->
                              </div>
                          </div>
                          <div class="card cd1 mr-4 wow fadeInRight" >
                              <div class="card-body">
                                  <!-- <h5 class="card-title">Panel title</h5> -->
                                  <p>Seconds</p>
                                  <h2 id="seconds">0</h2>
                                  <!-- <a class="card-link">Card link</a>
                                            <a class="card-link">Another link</a> -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section class="mb-4" id="About">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 text-center">
              <h3 class="h3">What we do?</h3>
              <p><?php// echo $arrayAbout['para']; ?></p>
            </div>
            <div class="col">
              <div class="card-deck">
                <!-- Card -->
                <div class="blue-gradient card px-4" >

                  <!-- Content -->
                  <div class="text-white text-center align-items-center" >
                    <div>
                      <h5 class="dark-grey-text py-4 "><i class="fa fa-pie-chart"></i> Workshops</h5>
                      <p class="py-1">An amazing platform to build with hands-on experience on the latest technologies by high profiled expert speakers on the top notch technologies around the world. It's a huge opportunity for the young budding techies to learn new and trending technology around them on the second day day of complete tech driven interesting hands on code labs by innovators around.</p>
                      <a href="Agenda.php" class="btn bg1 mt-4"><i class="fa fa-clone left"></i > View More >></a>
                    </div>
                  </div>

                </div>
                <!-- Card -->
              <!-- Card -->
              <div class="card blue-gradient px-4" >

                <!-- Content -->
                <div class="text-white text-center align-items-center" >
                  <div>
                    <h5 class="dark-grey-text py-4 "><i class="fa fa-pie-chart"></i> Key Notes</h5>
                    <p class="py-1">A platform to learn and mind blogging tech talks by high profiled expert speakers on the top notch technologies around the world. It's a huge opportunity for the young techies to make themselves aware of new and trending technology around them on the first day of complete tech driven interesting hands on code labs by innovators around.</p>
                    <a href="Agenda.php" class="btn bg1 mt-4"><i class="fa fa-clone left"></i > View More >></a>
                  </div>
                </div>

              </div>
              <!-- Card -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="Description" class="text-white bg1 mt-2">
        <?php
          $query="select * from fusion where type='blog'";
          $results=mysqli_query($select_db,$query);
          $count=0;
         ?>
        <br>
        <div class="container-fluid mt-4 py-4 text-center row">
          <div class="col-12">
            <h3 class="h3">Why Attend?</h3>
          </div>
        </div>
        <div class="container  mt-4 py-4">
         <?php
          while ($row=mysqli_fetch_array($results)) {
            $count++; ?>
            <?php if ($count%2==1){ ?>
              <div class="row">
                <div class="col-lg-8">
                  <div class="card p-3 mb-3">
                    <blockquote class="blockquote mb-0 card-body">
                      <p class="text-dark"><?php echo $row['para']; ?></p>
                      <footer class="blockquote-footer">
                        <small class="text-muted">
                          By the team of <cite title="Source Title">Tech Weekend</cite>
                        </small>
                      </footer>
                    </blockquote>
                  </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-3">
                  <img src="admin/img/blog/<?php echo $row['imgpath']; ?>" class="img-fluid z-depth-1" alt="Responsive image">
                </div>
              </div>

            <hr ><br>
            <?php }else { ?>
              <div class="row">
                <div class="col-lg-4 col-md-12 mb-3">
                  <img src="admin/img/blog/<?php echo $row['imgpath']; ?>" class="img-fluid z-depth-1" alt="Responsive image">
                </div>
                <div class="col-lg-8">
                  <div class="card p-3 mb-3">
                    <blockquote class="blockquote mb-0 card-body">
                      <p class="text-dark"><?php echo $row['para']; ?></p>
                      <footer class="blockquote-footer">
                        <small class="text-muted">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                      </footer>
                    </blockquote>
                  </div>
                </div>
              </div>

            <hr><br>
            <?php } ?>

      <?php  } //while end  ?>
        </div>
      </section>
      <section id="Speakers" class="bg3">
        <div class="container py-4">
          <div class="row justify-content-center">
            <div class="text-center col-12">
              <h3>Speakers</h3>
            </div>
            <?php
              $query="select * from speakers";
              $result=mysqli_query($select_db,$query);
              while ($row=mysqli_fetch_array($result)) {
                // code...
             ?>
            <div class="col-8 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                <!--Card-->
                    <div class=" card card-cascade wider mb-4">
                      <div class="hovereffect">

                      <!--Card image-->
                      <div class="hoverover view view-cascade">
                        <img src="admin/img/speakers/<?php echo $row['imgpath']; ?>" class="card-img-top">
                        <a href="#!">
                          <div class="mask rgba-dark-slight"></div>
                        </a>
                      </div>
                      <div class="overlay">
                         <h2 class="mt-2">Linkedin</h2>
                         <a class="info" href="<?php echo $row['link']; ?>" target="_blank" class="icons-sm li-ic"><i class="fa fa-linkedin fa-2x"  onMouseOver="this.style.color='#0077B5'" onMouseOut="this.style.color='#000'" style="color:black"> </i></a>
                      </div>
                    </div>
                      <!--/Card image-->

                      <!--Card content-->
                      <div class="card-body card-body-cascade text-center">
                        <!--Title-->
                        <h4 class="card-title"><strong><?php echo $row['name']; ?></strong></h4>
                        <h5 class="heh"><strong><?php echo $row['desig']; ?></strong></h5>

                        <p class="card-text"> <?php echo $row['company']; ?> </p>

                        <!--Linkedin-->
                        <a href="<?php echo $row['link']; ?>" target="_blank" class="icons-sm li-ic"></a>

                      </div>
                      <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
              <?php } ?>

      </section>
      <section id="Gallery" class="bg1 py-4">
        <?php
        $query="select * from fusion where type='gallery' limit 5";
        $results=mysqli_query($select_db,$query) or die(mysqli_error($select_db));
        $Imgarray=array();
        while ($row=mysqli_fetch_array($results)) {
          array_push($Imgarray,$row['imgpath']);
        }
      //  print_r($Imgarray);
         ?>
        <div class="container text-white">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="h2 pb-3">Gallery</h2>
            </div>
          </div>
          <!-- Grid row -->
          <div id="img2" class="row">

            <!-- Grid column -->
            <div class="col-md-4  mb-3">

              <img  src="admin/img/gallery/<?php echo $Imgarray[0]; ?>" class="img-fluid  z-depth-1"
                alt="">

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 mb-3">

              <img src="admin/img/gallery/<?php echo $Imgarray[1]; ?>" class="img-fluid  z-depth-1"
                alt="">

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4  mb-3">

              <img src="admin/img/gallery/<?php echo $Imgarray[2]; ?>" class="img-fluid  z-depth-1"
                alt="">

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div id="img3" class="row">

            <!-- Grid column -->
            <div class="col-md-6 mb-3">

              <img src="admin/img/gallery/<?php echo $Imgarray[3]; ?>" class="img-fluid  z-depth-1"
                alt="">

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 mb-3">

              <img src="admin/img/gallery/<?php echo $Imgarray[4]; ?>" class="img-fluid  z-depth-1"
                alt="">

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <div class="row justify-content-md-center">
          <div class=" col-md-3">
          <a href="gallery.php"><button type="button" class="btn blue-gradient btn-lg btn-block">View more</button></a>
          </div>
        </div>
      </section>
      <section class="my-3" id="Partners">
        <div class="container-fluid">
          <?php $select="SELECT type,imgpath from mix order by type";
                $result = mysqli_query($select_db,$select);
                $name="";
                 while ($row=mysqli_fetch_array($result)) {
                  if ($row['type']==$name) {
                  continue;
                  }
                  $name=$row['type'];
                 ?>

          <div class="row py-2">
            <div class="col-12">
              <h3 class="h3 text-center"> <?php echo $name; ?></h3>
            </div>
          </div>
          <div class="row py-4 justify-content-center">
            <?php
            $select="SELECT type,imgpath,link from mix where type='$name'";
                  $res = mysqli_query($select_db,$select);
            while($row=mysqli_fetch_array($res)){
            $imageURL = 'admin/img/sponsors/'.$row['imgpath'];
            ?>
             <div class="column mx-3 py-2">
                <a href="<?php echo $row['link']; ?>" target="_blank"> <img src="<?php echo $imageURL; ?>" style="height:100px;" class="img-fluid" alt="placeholder"></a>
             </div>
          <?php } ?>
          </div>
          <?php } ?>

        </div>
      </section>
      <section id="workWithUs" class="bg1 my-3 pt-1">
          <div class="container text-white">
                  <h1 class="my-5 text-center" >Work with us?</h1>
                  <div class="row justify-content-center">
              <div class="col-lg-6 pb-4">
                <h1>Wanna reserva a stall?</h1>
                <p>Fill in the details and wait for our respond for you amazing work</p>
                <p>Hurry! It will be based of first come first serve</p>
                <div class="col-6 text-center text-md-left">
                      <a class="btn btn-lg blue text-white btn-block" data-toggle="modal" data-target="#orangeModalSubscription"> Send </a>
                  </div>
                  <!--modal2-->
                  <div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify" role="document">
                      <!--Content-->
                      <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header text-center blue">
                          <h4 class="modal-title white-text w-100 font-weight-bold py-2">Subscribe</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                          </button>
                        </div>

                        <!--Body-->
                        <div class="modal-body">
                          <div id="stalldiv">

                          </div>
                          <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="stallName" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="stallName">Your name</label>
                          </div>
                          <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="stallEmail" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="stallEmail">Your email</label>
                          </div>
                          <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="number" pattern="[0-9]{10,11}" id="stallCont" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="stallCont">Contact</label>
                          </div>
                          <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="stallOrg" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="stallOrg">Organization</label>
                          </div>
                          <div class="md-form">
                            <i class="fa fa-tag prefix grey-text"></i>
                            <input type="text" id="stallTopic" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="stallTopic">What is your display name?</label>
                          </div>
                          <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <textarea name="name" rows="6" cols="60" id="stallDesc" class="form-control validate"></textarea>
                            <label data-error="wrong" data-success="right" for="stallDesc">Describe it in few words</label>
                          </div>
                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">
                          <a type="button" onclick="stall();" class="btn waves-effect">Send <i class="fa fa-paper-plane-o ml-1"></i></a>
                        </div>
                      </div>
                      <!--/.Content-->
                    </div>
                  </div>
                  <!-- modal2 -->
                </div>
              <div class="col-lg-6 pb-4">
                <h2>Have something exciting to dispaly?</h2>
                <p>Dispaly it in the gather the full potential of the huge audience present. Interact with students, business leaders, techno-hulks, entrepreneurs and industry experts who love to live on the edge of the technological revolution</p>
                <p>You can display it for the whole two days. And Be a part of this event </p>
              </div>
            </div>
          </div>
      </section>
      <!-- modal -->
      <div class="modal fade" id="orangeModalReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center blue">
              <h4 class="modal-title white-text w-100 font-weight-bold py-2" >Registration</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>

            <!--Body-->
            <div class="modal-body">
              <div class="text-white" id="Registerdiv">

              </div>
              <div class="md-form mb-5">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="formName" class="form-control validate" placeholder="Your Name">
              </div>

              <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="email" id="formEmail" class="form-control validate" placeholder="Email">
              </div>
              <div class="md-form mb-5">
                <i class="fa fa-phone prefix grey-text"></i>
                <input type="text" id="formContact" class="form-control validate" placeholder="Contact">
              </div>
              <div class="md-form mb-5">
                <i class="fa fa-group prefix grey-text"></i>
                <input type="text" id="formOrg" class="form-control validate" placeholder="Organization">
              </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <a type="button" class="btn waves-effect" onclick="Register();"style="color:blue;" > Send <i class="fa fa-paper-plane-o ml-1"style="color:blue;"></i></a>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <!-- modal -->
      <section id="map" class="py-4 my-4">
        <?php
          $query="select * from techday";
          $venue=mysqli_query($select_db,$query);
          $vrow=mysqli_fetch_array($venue);
         ?>
          <div class="container">
                  <div class="row">
                          <div class="col-lg-6 wow fadeInLeft">
                                  <div id="mapid"></div>
        <!--<button onclick="getLocation()">Try It</button>-->
                                  <p id="demo"></p>
                          </div>
                          <div class="col-lg-6">
                            <div class="row justify-content-center">
                              <div class="col-8">
                                <img src="admin/img/banner/<?php echo $vrow['imgpath']; ?>" class="wow fadeInUp img-fluid z-depth-1 " alt="Responsive image">
                              </div>
                            </div>
                            <h1 class="my-2 text-center wow fadeInRight"><?php echo $vrow['location']; ?></h1>
                            <h5 class="my-1 text-center text-muted wow fadeInRight"><?php echo $vrow['sdate']." & ".$vrow['edate']; ?> | <?php echo $vrow['stime']." to ".$vrow['etime']; ?></h5>
                            <p class="text-center h6 wow fadeInRight"><?php echo $vrow['address']; ?></p>
                          </div>
                        </div>
          </div>
      </section>
      <section id="contactus" class="mt-4 bg1 pt-2">
              <div class="container">

                  <!--Section heading-->
                  <h2 class="h1-responsive text-white font-weight-bold text-center my-4">Contact us</h2>
                  <!--Section description-->
                  <!-- <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                  a matter of hours to help you.</p> -->

                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-9 mb-md-0 mb-5">
                          <form id="contact-form" name="contact-form" action="#" method="POST">
                            <div id="contactdiv">

                            </div>
                              <!--Grid row-->
                              <div class="row">

                                  <!--Grid column-->
                                  <div class="col-md-6">
                                      <div class="md-form mb-0">
                                          <input type="text" id="contactName" name="name" class="form-control text-white">
                                          <label for="name" class="">Your name</label>
                                      </div>
                                  </div>
                                  <!--Grid column-->

                                  <!--Grid column-->
                                  <div class="col-md-6">
                                      <div class="md-form mb-0">
                                          <input type="text" id="contactEmail" name="email" class="form-control text-white">
                                          <label for="email" class="">Your email</label>
                                      </div>
                                  </div>
                                  <!--Grid column-->

                              </div>
                              <!--Grid row-->

                              <!--Grid row-->
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="md-form mb-0">
                                          <input type="text" id="contactSubject" name="subject" class="form-control text-white">
                                          <label for="subject" class="">Subject</label>
                                      </div>
                                  </div>
                              </div>
                              <!--Grid row-->

                              <!--Grid row-->
                              <div class="row">

                                  <!--Grid column-->
                                  <div class="col-md-12">

                                      <div class="md-form">
                                          <textarea type="text" id="contactMessage" name="message" rows="2" class="form-control md-textarea text-white"></textarea>
                                          <label for="message">Your message</label>
                                      </div>

                                  </div>
                              </div>
                              <!--Grid row-->

                          </form>

                          <div class="text-center text-md-left">
                              <a class="btn btn-primary" onclick="Contact();"> Send</a>
                          </div>
                          <div class="status"></div>
                      </div>
                      <!--Grid column-->
                      <!--Grid column-->
                      <div class="col-md-3 text-white text-center">
                          <ul class="list-unstyled mb-0"  >
                              <li><i class="fa fa-map-marker fa-2x"></i>
                                  <p>Fame Technologies,Bangalore</p>
                              </li>

                              <li><i class="fa fa-phone mt-4 fa-2x"></i>
                                  <p>+91 6362250931</p>
                              </li>

                              <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                                  <p>info@fametronix.com</p>
                              </li>
                          </ul>
                      </div>
                      <!--Grid column-->

                  </div>
              </div>

          </section>

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
              <h5 class="text-uppercase">TechWeekend</h5>
              <p>For more information contact us. <br> To be updated follow us. </p>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled">
                  <li class="my-2">
                    <a class="foot" href="#home">Home</a>
                  </li>
                  <li class="my-2">
                    <a class="foot" href="gallery.php">Gallery</a>
                  </li>
                  <li class="my-2">
                    <a class="foot" href="agenda.php">Agenda</a>
                  </li>

                </ul>
              </div>
              <!-- Grid column -->
              <!-- Grid column -->
              <div class="col-md-3">
              <h3 class="showcase-left">follow us</h3>
              <br>
              <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-2 col-sm-3 col-xs-3 showcase-rightsocial1">
              <a href="#" target="_blank">
              <i class="fa fa-facebook fa-2x"> </i>
              </a>
              </div>
              <div class="col-md-2 col-sm-3 col-xs-3 showcase-rightsocial2">
              <a href="#" target="_blank">
              <i class="fa fa-instagram fa-2x"> </i>
              </a>
              </div>
              <div class="col-md-2 col-sm-3 col-xs-3 showcase-rightsocial3">
              <a href="#" target="_blank">
              <i class="fa fa-linkedin fa-2x"> </i>
              </a>
              </div>
              <div class="col-md-2 col-sm-3 col-xs-3 showcase-rightsocial4">
              <a href="#" target="_blank">
              <i class="fa fa-twitter fa-2x"> </i>
              </a>
              </div>
              <div class="col-md-2"></div>
              </div>
              </div>
              <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">This website is developed and maintained by <a href="http://fametechnologies.in/" target="_blank">Fame Technologies</a>
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
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/js/mdb.min.js"></script>
      <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>
   <script src='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
   <script>

    var x = document.getElementById("demo");
    var long= <?php echo $vrow['longitude']; ?>;
    var lat= <?php echo $vrow['latitude']; ?>;
    var mymap = L.map('mapid').setView([lat, long], 50);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}',
    {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox.streets',
      accessToken: 'pk.eyJ1IjoieGFpb2RyZTA5NiIsImEiOiJjam5wcG9tdHkwMXZqM2xvZWxvbXIzazVnIn0.Mz_b1iR6Q9t7aksAv_C_Yw'
    }).addTo(mymap);

    var marker = L.marker([lat, long]).addTo(mymap);
    marker.bindPopup("<?php echo $vrow['location']; ?>").openPopup();

        // var theMarker = {}
        // function onMapClick(e)
        // {
        //   lat = e.latlng.lat;
        //   lon = e.latlng.lng;
        //   if (theMarker != undefined)
        //   {
        //       mymap.removeLayer(theMarker);
        //   };
        //   theMarker = L.marker(e.latlng).addTo(mymap);
        //   theMarker.bindPopup("Your restaurant").openPopup();
        //
        //   document.getElementById("latitude").value = lat;
        //   document.getElementById("longitude").value = lon;
        // }
        //
        // mymap.on('click', onMapClick);

  </script>

  <script>
    var countDownDate = new Date("<?php echo $vrow['sdate']; ?> <?php echo $vrow['stime']; ?>").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("days").innerHTML = days + "d ";
    document.getElementById("hours").innerHTML = hours + "h ";
    document.getElementById("minutes").innerHTML = minutes + "m ";
    document.getElementById("seconds").innerHTML = seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
  </script>
  <script type="text/javascript">
    new WOW().init();
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
  </script>
  <script>

  var name;
  var email;
  var contact;
  var org;
  var query;
  var title;
  var desc;
  var Data;

    function Register() {
    name=document.getElementById("formName").value;
    email=document.getElementById("formEmail").value;
    contact=document.getElementById("formContact").value;
    org=document.getElementById("formOrg").value;

    if (name == '' || email == '' || org == '' || contact == '') {
      document.getElementById("Registerdiv").innerHTML = "Fill all fields!";
    }else {
      Data="name="+name+"&email="+email+"&org="+org+"&contact="+contact;
      alert(Data);
      rloadDoc();
      }
    }

    function rloadDoc() {
      alert(Data);
      var rxhttp = new XMLHttpRequest();
      rxhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("Registerdiv").innerHTML = this.responseText;
        }
      };
      rxhttp.open("POST", "register.php", true);
      rxhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      rxhttp.send(Data);
      //  xhttp.send("name = "+name+" || email = "+email+" || org = "+org+" || contact = "+contact+" || feed == "+feed+"");
      }

      function stall() {
        name=document.getElementById("stallName").value;
        email=document.getElementById("stallEmail").value;
        contact=document.getElementById("stallCont").value;
        org=document.getElementById("stallOrg").value;
        title=document.getElementById("stallTopic").value;
        desc=document.getElementById("stallDesc").value;


        if (name == '' || email == '' || org == '' || contact == '' || title == '' || desc == '') {
          document.getElementById("stalldiv").innerHTML = "Fill all fields!";
        }else {
          Data="name="+name+"&email="+email+"&org="+org+"&contact="+contact+"&title="+title+"&desc="+desc;
          alert(Data);
          sloadDoc();
          }
        alert('2');
      }

      function sloadDoc() {
        alert(Data);
        var rxhttp = new XMLHttpRequest();
        rxhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("stalldiv").innerHTML = this.responseText;
          }
        };
        rxhttp.open("POST", "stall.php", true);
        rxhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        rxhttp.send(Data);
        //  xhttp.send("name = "+name+" || email = "+email+" || org = "+org+" || contact = "+contact+" || feed == "+feed+"");
        }

        function Contact() {
          name=document.getElementById("contactName").value;
          email=document.getElementById("contactEmail").value;
          subject=document.getElementById("contactSubject").value;
          message=document.getElementById("contactMessage").value;

          if (name == '' || email == '' || subject == '' || message == '') {
            document.getElementById("contactdiv").innerHTML = "Fill all fields!";
          }else {
            Data="name="+name+"&email="+email+"&subject="+subject+"&message="+message;
            alert(Data);
            cloadDoc();
            }
          alert('2');
        }

        function cloadDoc() {
          alert(Data);
          var rxhttp = new XMLHttpRequest();
          rxhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("contactdiv").innerHTML = this.responseText;
            }
          };
          rxhttp.open("POST", "contact.php", true);
          rxhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          rxhttp.send(Data);
          //  xhttp.send("name = "+name+" || email = "+email+" || org = "+org+" || contact = "+contact+" || feed == "+feed+"");
          }
  </script>

  </body>
</html>
