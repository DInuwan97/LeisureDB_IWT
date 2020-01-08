<!DOCTYPE html>


<?php
    include('common/headeradmin.php');
?>

<?php
 $id=$_GET['id'];
?>


<?php
    include('separatecss/postaddstyle.php');
?>




<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->






<?php
  //include('config/connection.php');

 
  //if(isset($_POST["btnsearch"]))
 // {
   // $searchid = $_POST["searchid"];

   // $sql = "SELECT * FROM postadd WHERE id = $searchid";
   // $qry = mysqli_query($con,$sql);

   // if($row=mysqli_fetch_array($qry)){

    //}

?>

<?php
  include('config/connection.php');

  $sql="SELECT d.id,d.postid,p.id,p.servicename,p.category,p.image,p.cost FROM displayadd d,postadd p WHERE d.id = $id AND d.postid = p.id  ";
  $qry = mysqli_query($con,$sql);
  
  if($row = mysqli_fetch_array($qry))
  {
?>




 <!--Content  Start - Manesha-->
  <div class="content">
    <h1>Update Your Advertisements</h1>

      <div>
        <section class="container">
          <div class="leftContainer">

            <div class="row">
              <div class="col-25">
                <label>Service Type</label>
              </div>
              <div class="col-75">
              <label><?php echo $row["servicename"]; ?></label>
              </div>
            </div>

             
            <div class="row">
              <div class="col-25">
                <label>Service Category</label>
              </div>
              <div class="col-75">
              <label><?php echo $row["category"]; ?></label>
              </div>
            </div>    
            <div class="row">
              <div class="col-25">
                <label>Cost Per Person</label>
              </div>
              <div class="col-75">
              <label><?php echo $row["cost"]; ?></label>
            </div>

            <div class="row">
              <div class="col-25">
                <label>Upload Image</label>
              </div>
              <div class="col-75">
            
              </div>
            </div>
     
            <input type="hidden" name="hiddenid" value="<?php echo $row["id"]; ?>">
    
            <div class="row">
              <input type="submit" name="btnupdate"  value="Request from Admin">
            </div>
            </form> 


          </div>

 <img src="imgserver/<?php echo $row["image"]; ?>" alt="" style="width:450px; height:250px;"> 
        </section>
      </div>

    
  </div>
  <div></div>
  </div>


  <?php
  }

  ?>

  <?php

 /*include('config/connection.php');

    		if(isset($_POST["btnupdate"])){


          $servicename = $_POST['servicename'];
          $description = $_POST['description'];
          $category = $_POST['category'];
          $cost = $_POST['cost'];
          $searchid = $_POST['searchid'];
        
         // $file1 = $now.'-'.$_FILES[$fieldname]['name'];
         

          $sql1="UPDATE postadd SET servicename='".$_POST['servicename']."',description='".$_POST['description']."' 
          ,category='".$_POST['category']."' ,id='".$_POST['searchid']."',cost='".$_POST['cost']."' where id='". $_POST["searchid"]."'";
            
            
            //excute query
            if(mysqli_query($con,$sql1)){
              
            echo'
              <div class="alert alert-success" role="alert" style="font-size:40px">
              Thank You '.$_POST["searchid"].'	You will recieve E-mail after a short while!
              </div>
                       
            ';
              
              
              
              
            }
            else{
              echo'
             Unsuccess
                       
            ';
            }
                   
        }*/

  ?>

                <br><br><br><br><br><br><br><br><br></br>
                <br><br><br><br>


  <!--Content  End - Manesha-->

<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->
<?php
    include('common/footeradmin.php');
?>