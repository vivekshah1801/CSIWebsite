<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Events</title>
		<link rel="stylesheet" href="css/timeline.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
	</head>
	<body>

		<div class="timeline">

		<?php
		$servername = "sql12.freemysqlhosting.net:3306";
		$username = "sql12295014";
		$password = "NmSEW4kuck";
		$dbname = "sql12295014";
		$conn = mysqli_connect($servername, $username, $password,$dbname);
		if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";

		$sql = "SELECT * FROM Events_master";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
        ?>

		<div class="timeline-item">
		  <div class="timeline-img"></div>

		  <div class="timeline-content timeline-card">
			<div class="timeline-img-header" style='background-image: url("<?php echo $row["Elink"]; ?>");'>
			  <h2><?php echo $row["EName"]; ?></h2>
			</div>
			<div class="date"><?php echo $row["EDate"]; ?></div>
			<p><?php echo $row["EDescription"]; ?></p>
			<a class="bnt-more" href="<?php echo $row["Elink"]; ?>">More</a>
		  </div>
		</div>

		<?php
			}
		} else {
    echo "0 results";
}
		$conn->close();

		?>





		</div>
	</body>
</html>
