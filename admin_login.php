<?php
if(!isset($_SESSION))
    session_start();
?>

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
            if(isset($_POST['login'])){
                if( empty($_POST['name']) || empty($_POST['password']))
                    echo '<div class="notFilled"> Enter details. </div>';
                    try{
                        $dbhandler = new PDO('mysql:host=localhost:3306;dbname=csiwebsite','root','');
                        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        $sql="select Username from admin where Username=? and Password=?";
                        $query=$dbhandler->prepare($sql);
                        $query->execute(array($_POST['name'], $_POST['password']));
                        $id = $query->fetch(PDO::FETCH_COLUMN);
                        if(!$id)
                            echo '<div class="notFilled"> Invalid Username or password. </div><br/><br/>';
                        else{
                            if($id == 1)
                                header('Location: admin_panel.php');
                            else
                                header('Location: '.$_SESSION['currentpage']);
                            $_SESSION['user']=$_POST['name'];
                        }
                    }
                    catch(PDOException $e){
                        echo $e->getMessage();
                        die();
                    }
                }
            
            echo '<input type="submit" name="login" value="Login"/><br/><br/><br/>';
        ?>
       </div>
</body>

</html>