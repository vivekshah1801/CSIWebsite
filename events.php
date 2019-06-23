<!doctype html>
<html lang="en">

<head>
  <title>CSI DDU | Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/timeline.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <!-- <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->


  <div class="site-wrap">

    <?php include("header.php"); ?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/img_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">


          <div class="col-md-12 mt-lg-5 text-center">
            <h1 class="mb-4">What We Do?</h1>
            <p class="desc mb-4">We organize various events round the calendar. <br>This not only keeps the club active but students also gets to intract with industry experts.<br>Here is the chronicle of seminars, events and competition we organized.</p>

			<a href="#" target="_blank" class="btn  btn-primary mr-2 mb-2 mt-3">Have a Look</a>

          </div>

        </div>
      </div>
    </div>



	<section class="timeline">
	  <div class="container">

		<?php

		include("db_connect.php");
		$sql = "SELECT * from Event_master ORDER BY date DESC LIMIT 10";
		$event_list = $pdo->query($sql)->fetchAll();
		// now $event variable has list of events

		foreach($event_list as $event){
		?>

	    <div class="timeline-item">

	      <div class="timeline-img"></div>

	      <div class="timeline-content timeline-card">
	        <div class="timeline-img-header" style="background-image: url(<?php echo $event['photo_link']; ?>);">
	          <h2><?php echo $event['name']; ?></h2>
	        </div>
	        <div class="date"><?php echo date("jS M, Y", strtotime($event['date'])); ?></div>
	        <p><?php echo $event['description']; ?></p>
	        <a class="bnt-more" href="<?php echo $event['blog_link']; ?>">More</a>
	      </div>

	    </div>

		<?php
		}
		$pdo = null;
		?>
	  </div>
	</section>

	<?php include("footer.php"); ?>


  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>


  <script src="js/main.js"></script>


</body>

</html>
