<!doctype html>
<html lang="en">

<head>
  <title>CSI DDU | Blog</title>
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

	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand text-primary" href="blogs.php">CSI Blog</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  			<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
  			<ul class="navbar-nav">
  				<li class="nav-item">
  					<a class="nav-link" href="index.php">Home</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" href="events.php">Events</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" href="team.php">Our Team</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" href="contact.php">Contact</a>
  				</li>
  			</ul>
  		</div>
  	</nav>


	<h1 class="text-primary text-center mt-3">Blog</h1>

	<section id="blog_list" class="pr-5 pl-5" style="padding-top:50px;">

	<?php
		include("db_connect.php");
		$sql = "SELECT * from Blog_master ORDER BY date_published DESC LIMIT 10";
		$blog_list = $pdo->query($sql)->fetchAll();
		// now $event variable has list of events

		foreach($blog_list as $blog){
	?>
		<div class="card mb-3">
		 <div class="card-body">
		    <h3 class="card-title display-1 text-bold text-primary"><?php echo $blog['title']; ?></h3>
		    <p class="card-text text-truncate"><?php echo $blog['content']; ?></p>
		    <p class="card-text"><small><?php echo date("jS M, Y", strtotime($blog['date_published'])); ?><span class="mx-2">&bullet;</span><?php echo $blog['author']; ?></small></p>
		  </div>
		</div>

	<?php
		}
		$pdo = null;
	?>
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
