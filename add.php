



<html>
  <head>
  </head>
  <style>
  
input[type=text],input[type=number],input[type=file]
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




  <form method="post" action="upload.php" enctype="multipart/form-data">
           <h1> Enter News Details :</h1>
            <hr>
          <center>
          
          <table>
           
            
            
              <tr>
                 <td>Name :</td>
                 <td><input name="name" type="text" id="name"></td>
              </tr>
              <tr>
                  <td>Headline</td>
                  <td><input name="headline" type="text" id="headline"></td>
              </tr>
             
              <tr><td>Image :</td>
                  <td><input type="file" name="myFile" ></td>
              </tr>

             <tr> 
                  <td>News Story : </td>
                  <td><textarea name="story" id="story" rows="15" cols="40"></textarea></td>
              </tr>
            
                  <tr><td colspan="2"><center><button type='submit' class='insertbtn' id="insert">Insert</button></center></td></tr>
              </table>
              </center>
                </form>
