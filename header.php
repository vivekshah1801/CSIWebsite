<html>
	<head>
		<title>CSI</title>
		<link rel="shortcut icon" href="img/csi-logo.png" />
		<link rel="stylesheet" href="css/footer.css" >
		<link rel="stylesheet" href="css/bootstrap-4.0.0-alpha.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="js/tether.min.js" crossorigin="anonymous"></script>
		<script src="js/bootstrap-4.0.0-alpha.js" crossorigin="anonymous"></script>
	</head>
	<style>
	.white-color{
		color:white !important
	}
	
	.active{
		background-color:rgba(0,34,241,0.6)
	}
	.navbar-toggler-right {
	    position: fixed;
	    right: 1rem;
	    top: 15px;
	}
	.hover-me:hover{
		background-color:#0028CD;
	}
	</style>
	<nav class="navbar navbar-toggleable-md navbar-light fixed-top" style="background-color:#003399;height:62px;">
		<a href="index.php"><img src="img/logo.jpeg"  height="42" width="200" /></a>
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
		  <div class="collapse navbar-collapse" id="">
			<div class="navbar-nav">
	  		<div class="container">
				<div class="row">
				<div class="col-1  offset-1 hover-me" align="center" id="temp">
					<a class="white-color  nav-item nav-link <?php if(isset($page_tab) and $page_tab == "home"){echo "active";}?>" href="index.php" >Home </a>
				</div>
				<div class="col-1 col-lg-1 col-md-1  hover-me col-xl-1 " align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "gallery"){echo "active";}?>" href="gallery.php">Events</a>
				</div>
				<div class="col-2 col-lg-2 col-md-2 col-xl-2 hover-me" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "present_committee"){echo "active";}?>" href="present_committee.php">Present Committee</a>
				</div>
				<div class="col-2 col-lg-2 col-md-2 col-xl-2  hover-me" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "past_committees"){echo "active";}?>" href="past_committees.php">Past Committees</a>
				</div>
				<div class="col-1 col-lg-1 col-md-1 col-xl-1  hover-me" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "about_us"){echo "active";}?>" href="about_us.php" >About</a>
				</div>
				<div class="col-2 col-lg-2 col-md-2 col-xl-2 hover-me" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "contact_us"){echo "active";}?>" href="contact_us.php">Contact us</a>
				</div>
				</div> 
			 
			</div> <!--Container ended-->
			</div>
		  </div>

	  		<div class="" id="navbarNavAltMarkup" style="display: none;background-color: rgba(0,51,153,0.7)">
				<div class="row">
				<div class="col-12 hover-me" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "home"){echo "active";}?>" href="index.php" >Home </a>
				</div>
				<div class="col-12 hover-me" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "gallery"){echo "active";}?>" href="gallery.php">Events</a>
				</div>
				<div class="col-12 hover-me" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "present_committee"){echo "active";}?>" href="present_committee.php">Present Committees</a>
				</div>
				<div class="col-12 hover-me" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "past_committees"){echo "active";}?>" href="past_committees.php">Past Committees</a>
				</div>
				<div class="col-12 hover-me" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "about_us"){echo "active";}?>" href="about_us.php" >About</a>
				</div>
				<div class="col-12 hover-me" align="center">
					<a class="white-color nav-item nav-link <?php if(isset($page_tab) and $page_tab == "contact_us"){echo "active";}?>" href="contact_us.php">Contact us</a>
				</div>
				</div> 
			 
			</div> <!--Container ended-->
	</nav>
	<script type="text/javascript">
		$('.navbar-toggler-right').click(function(){
			var _opened = $("#navbarNavAltMarkup").hasClass("show");
			if (_opened) {
				$('#navbarNavAltMarkup').hide();
			}
			else{
				$('#navbarNavAltMarkup').show();
			}
		});
		// $(document).click(function(){
		// 	$('.navbar-toggler-right').click();
		// });
		$(document).ready(function () {
		    $(document).click(function (event) {
		        var clickover = $(event.target);
		    	// console.log(clickover);
		        var _opened = $("#navbarNavAltMarkup").hasClass("show");
		        if (_opened === true && !clickover.hasClass("collapse")) {
		    		// alert('clickover');
		            $("button.navbar-toggler-right").click();
					$('#navbarNavAltMarkup').hide();
		            
		        }
		    });
		});
	</script>
	<body>