<html>
  <head>
  </head>
  <style>
  
input[type=text]
{
    
 
  width: 100%;
  padding: 2px;
  margin: 3px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.insertbtn {
  background-color: blueviolet;
  color: white;
  padding: 8px 5px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
</style>


<form method="POST">
	 name of news :<input type="text" name="name"  size="40" />
	 <input type="submit" class="inserbtn" name="submit">
</form>
<?php 
session_start();
include('dbconnect.php');

if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		if(empty($name))
		{
			echo "<div class='alert alert-danger' role='alert'>
			<strong>Enter Name!</strong>
			</div>";
		}
		
		
		else
		{
		$sql="DELETE FROM news WHERE name='$name' ";
		$run_query=mysqli_query($conn,$sql);
		if($run_query){
			echo "
				<div class='alert alert-danger' role='alert'>
  					<strong>Success!</strong> news removed!
				</div>
			";
		}
		}
		
			
	}
?>
</html>