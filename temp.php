<html>
<head>
	<title>Hello there!</title>
</head>
<body>
	<h3>Hello <?php echo $name;?></h3>
	<?php //print_r($response);?>
	<a href="<?=$router->pathFor('anything','?first=vaibhav&last=dodiya')?>">Click here..</a>
	<?php //print_r($router->pathFor(''));?>
	
</body>
</html>