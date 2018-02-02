<html>
	<head>
		<title>CSI</title>
		<link rel="shortcut icon" href="img/csi-logo.png" />
		<link rel="stylesheet" href="css/footer.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	</head>
	<style>
	.white-color{
		color:white !important
	}
	.white-color:hover{
		background-color:#0028CD;

	}
	.active{
		background-color:rgba(0,34,241,0.6)
	}
	padding{
		padding-right:47px;
		padding-left:47px;
	}
	.navbar-toggler-right {
	    position: fixed;
	    right: 1rem;
	    top: 15px;
	}
	</style>
	<nav class="navbar navbar-toggleable-md navbar-light fixed-top" style="background-color:#003399;height:62px;">
		<a href="index.php"><img src="img/logo.jpeg"  height="42" width="200" /></a>
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
	  		<div class="container">
				<div class="row">
				<div class="col-1  offset-1" align="center">
					<a class="white-color  nav-item nav-link <?php if(isset($page_tab) and $page_tab == "home"){echo "active";}?>" href="index.php" >Home </a>
				</div>
				<div class="col-1 col-lg-1 col-md-1 col-xl-1 " align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "gallery"){echo "active";}?>" href="gallery.php">Events</a>
				</div>
				<div class="col-2 col-lg-2 col-md-2 col-xl-2 " align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "present_committee"){echo "active";}?>" href="present_committee.php">Present Committees</a>
				</div>
				<div class="col-2 col-lg-2 col-md-2 col-xl-2 " align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "past_committees"){echo "active";}?>" href="past_committees.php">Past Committees</a>
				</div>
				<div class="col-1 col-lg-1 col-md-1 col-xl-1" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "about_us"){echo "active";}?>" href="about_us.php" >About</a>
				</div>
				<div class="col-2 col-lg-2 col-md-2 col-xl-2 " align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "contact_us"){echo "active";}?>" href="contact_us.php">Contact us</a>
				</div>
				</div> 
			 
			</div> <!--Container ended-->
			</div>
		  </div>
	</nav>
	<body>