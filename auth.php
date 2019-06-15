<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
  <link rel="stylesheet" href="./css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Login</p>
    <form class="form1" action="<?php $_PHP_SELF ?>" method="post">
      <input name="name" type="text" align="center" placeholder="Name">
      <input name="password" type="password" align="center" placeholder="Password"><br/><br/>
        
      
        <?php
            $servername = "sql12.freemysqlhosting.net:3306";
            $username = "sql12295014";
            $password = "NmSEW4kuck";
            $dbname = "sql12295014";
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            
            if(isset($_POST['login'])){
                
                if( empty($_POST['name']) || empty($_POST['password']))
                    echo '<div class="notFilled"> Enter details. </div>';
                else{
                    $user = $_POST['name'];
                    $pass = $_POST['password'];
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $query = mysqli_query($conn, "SELECT * FROM User_master WHERE password='$pass' AND username='$user'");
 
                    $rows = mysqli_num_rows($query);
                    if($rows == 1){
                        header('Location: admin.php');
                        }
                    else{
                        echo '<div class="notFilled"> Invalid username or password </div><br/><br/>';
                    }
                    }
                }
             echo '<br/><input type="submit" name="login" value="Login"/><br/><br/><br/>';
        ?>
        <a class="submit" href="index.php">Home</a>
    </div>
</body>

</html>
