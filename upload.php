<?php 
	
	include('dbconnect.php');
	if(!empty($_FILES["myFile"]["name"]))
	{
    
        $n="assets/images/".basename($_FILES["myFile"]["name"]);
        $new=basename($_FILES["myFile"]["name"]);
		if(!(move_uploaded_file($_FILES["myFile"]["tmp_name"], $n)))
                {echo "Error: " . $_FILES["myFile"]["error"] . "<br>";}
		
	}


	$name=$_POST['name'];
	$headline=$_POST['headline'];
	$story=$_POST['story'];



	if(empty($name) || empty($headline) || empty($story) ){
		echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Please fill all the fields!</div>";
		exit(0);
	}
		else {
					$sql="INSERT INTO news (name,myFile,headline,story,timestamp) VALUES ('$name','$new','$headline','$story',NOW())";
					$run_query=mysqli_query($conn,$sql);

					
					if($run_query){
						header("Location: news_view.php");

					}
			}
		
	

	

	
 ?>