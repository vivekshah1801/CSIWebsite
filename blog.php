<html>
<head>
<link rel="stylesheet" type="text/css" href="team.css">
</head>
<section id="team" class="pb-5">
<div class="container">
<?php 
  include('db_connect.php');
  $news="SELECT * FROM news";
    $run_query=mysqli_query($conn,$news);
    if(mysqli_num_rows($run_query)){
 while($row=mysqli_fetch_array($run_query)){
        $name=$row['name'];
        $headline=$row['headline'];
        $img=$row['myFile'];
        $story=$row['story'];

     
?>
<div class=row>
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center card-block">
                                    <h4 class="card-title"><?php echo $name;?></h4>
                                    <p class="card-text"><?php echo $headline ?></p>
                                    <p><img  src="<?php echo "assets/images/".$img.""; ?>"  alt="card image"></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4 card-block">
                                    <h4 class="card-title"><?php echo $headline ?></h4>
                                    <?php echo $story ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
               }
              }
?>
</div>
</div>
</section>
