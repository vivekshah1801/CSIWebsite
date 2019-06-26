<?php

	//if authorized user directly accesses this poge
	if($_POST['name']=="")
	{
		header("Location:/admin/add_event.php");
		die();
	}

	$file_name = $_FILES['photo_link']['name'];
    $file_size =$_FILES['photo_link']['size'];

	echo $file_size;

    $file_tmp =$_FILES['photo_link']['tmp_name'];
    $file_type=$_FILES['photo_link']['type'];

	$temp_1 = explode('.',$file_name);
    $file_ext=strtolower(end($temp_1));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
    	header("Location:add_event.php?msg=error_photo");
		die();
    }


	include('../db_connect.php');
	$event_id = $pdo->query("SELECT count(*) FROM Event_master")->fetchColumn();
	$event_id = (int)$event_id + 1;

	echo $event_id;

	$photo_link = "../assets/images/".$event_id.".".$file_ext;
	move_uploaded_file($file_tmp,$photo_link);

  	$name = $_POST['name'];
	$type = $_POST['type'];
	$date = $_POST['date'];
	$desc = $_POST['description'];
	$photo_link = "../assets/images/".$event_id.".".$file_ext;
	$blog_link = $_POST['blog_link'];

	$pdo = null;

?>
