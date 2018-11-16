switch ($count1) {
  case 0: ?>
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12 mb-3">

      <img src="admin/img/gallery/<?php echo $row['imgpath']; ?>" class="wow fadeInUp img-fluid z-depth-1" alt="Responsive image">

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
  <?php break;

  case 1:
  case 2:
  case 3: ?>
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-3">

      <img src="admin/img/gallery/<?php echo $row['imgpath']; ?>" class="wow fadeInUp img-fluid z-depth-1"
      alt="Responsive image">

    </div>
    <!-- Grid column -->
    <?php
    //inside switch
    switch ($count1) {
      case 2:?>
      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-3">

        <img src="admin/img/gallery/<?php echo $row['imgpath']; ?>" class="wow fadeInUp img-fluid z-depth-1"
        alt="Responsive image">

      </div>
      <!-- Grid column -->
      <?php  break;
      case 3: ?>
      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-3">

        <img src="admin/img/gallery/<?php echo $row['imgpath']; ?>" class="wow fadeInUp img-fluid z-depth-1"
        alt="Responsive image">

      </div>
      <!-- Grid column -->
      <?php break;
    }
    //inside switch
    ?>
  </div>
  <!-- Grid row -->
  <?php break;

  case 4:
  case 5: ?>
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-6 mb-3">
      <img src="admin/img/gallery/<?php echo $row['imgpath']; ?>" class="wow fadeInUp img-fluid z-depth-1"
      alt="Responsive image">
    </div>
    <!-- Grid column -->
    <?php
    /// inside switch

    switch ($count) {
      case 5:?>
      <!-- Grid column -->
      <div class="col-md-6 mb-3">
        <img src="admin/img/gallery/<?php echo $row['imgpath']; ?>" class="wow fadeInUp img-fluid z-depth-1"
        alt="Responsive image">
      </div>
      <!-- Grid column -->
      <?php break;
    }

    //inside switch
    ?>
  </div>
  <!-- Grid row -->
  <?php   break;
}
