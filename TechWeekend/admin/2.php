<?php include("connect.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/infinite-slider.css"/>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">
  <!--CDN for slick-->
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
  <script src="main.js"></script>
  </head>
  <body>


      <section id="judges" style="margin-top:10%; margin-bottom: 10%;">

          <div class="row">

              <div class="container" style="padding-left: 5%;">
                <?php $select="SELECT type,imgpath from mix order by type";
                      $result = mysqli_query($db,$select);
                      $name="";
                       while ($row=mysqli_fetch_array($result)) {
                        if ($row['type']==$name) {
                        continue;
                        }
                        $name=$row['type'];
                       ?>
                  <div class="col-md-10 col-md-push-2" style="margin-bottom: 5%;">
                      <h1 style="font-family: 'Germania One', cursive; color: #000; margin-left: 30%; font-size: 50px;"><?php echo $name; ?></h1>
                  </div>
                  <?php
                  $select="SELECT type,imgpath from mix where type='$name'";
                        $res = mysqli_query($db,$select);
                  while($row=mysqli_fetch_array($res)){
                  $imageURL = 'img/sponsors/'.$row['imgpath'];?>
                  <div class="col-md-3">
                      <div class="content" style="padding-left: 7%;">
                          <div class="content-overlay"></div>
                          <img class="content-image" src="<?php echo $imageURL; ?>" alt="Judge" class="image" height="215px;" width="130px;" >
                          <div class="content-details fadeIn-top"></div>
                      </div>
                  </div>

                <?php } ?>
              </div>

              <?php } ?>
            </div>

      </section>

</body>
</html>

<div class="container-fluid">

  <?php $select="SELECT type,imgpath from mix order by type";
        $result = mysqli_query($db,$select);
        $name="";
         while ($row=mysqli_fetch_array($result)) {
          if ($row['type']==$name) {
          continue;
          }
          $name=$row['type'];
         ?>

  <div class="row py-2">
    <div class="col-12">
      <p class="h3 text-center"> <?php echo $name; ?></p>
    </div>
  </div>
  <div class="row py-4 justify-content-center">
    <?php
    $select="SELECT type,imgpath,link from mix where type='$name'";
          $res = mysqli_query($db,$select);
    while($row=mysqli_fetch_array($res)){
    $imageURL = 'img/sponsors/'.$row['imgpath'];
    ?>
     <div class="column py-2">
        <a href="<?php echo $row['link']; ?>" target="_blank"> <img src="<?php echo $imageURL; ?>" style="height:100px;" class="img-fluid" alt="placeholder"></a>
     </div>
  <?php } ?>
  </div>
  <?php } ?>
</div>
