<?php
    include('common/headeradmin.php');
?>
<?php
  $id=$_GET['id'];
?>


<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->

<div class="single-sctivity-main">
  <br>
    <center>
    <!--   <h1>Hiking</h1> -->
  </center>


  <?php
  	include('config/connection.php');

  		$sql="SELECT p.id as 'addid',p.servicename,p.description,p.category,p.cost,p.usermail,p.status
  		,p.adminstatus,p.paymentstatus,p.image,p.date,r.fname,r.lname,r.mobile,r.email,r.address,r.status FROM postadd p,register r WHERE p.id = $id AND p.usermail=r.email ";

  		$qry = mysqli_query($con,$sql);
  		$row = mysqli_fetch_array($qry);
  ?>



  <div class="main-single">
      <div class="single-activity-left clearfix">
      <h2>
        <?php echo $row["servicename"];?>
      </h2>

      <h5>  </h5>

<center>
  <div class="activity-image">
    <div class="thumb-image detail_images">
            <img src="imgserver/<?php echo $row["image"];?>" style="width:100%; height: 100%;"  data-imagezoom="true" class="img-responsive" alt="">
            </div>
  </div>



 <div class="activity-decription clerfix">
  <!--  
   <h6>A Brief Introdution</h6> -->


  <p class="des" style="float: left;">
   <?php echo $row["description"]; ?>
  </p>


  </div><!-- activity-decription -->




</center>
          


      </div><!-- single-activity-left -->

      <div class="single-activity-right clearfix">
 
<center>       
        <div class="provider-info">
            <table border="0">
              <tr>
                <td style="width:20px;"><i class="fab fa-servicestack fa-2x"></i></td>
                <td></td>
                <td></td>
                <td> Service Provider     : </td>
                <td style="margin-top: 15px;"><?php echo $row["fname"];?> <?php echo $row["lname"];?></td>
              </tr>

              <tr>
                <td style="width:20px;"><i class="fas fa-phone fa-2x"></i></td>
                <td></td>
                <td></td>
                <td><?php echo $row["mobile"];?></td>
              </tr>

              <tr>
                <td style="width:20px;"><i class="fas fa-envelope-square fa-2x"></i></td>
                <td></td>
                <td></td>
                <td><a href="mailto:<?php echo $row["email"];?>" style="text-decoration: none;"><?php echo $row["email"];?></a></td>
              </tr>

            </table>


            <div class="offline-pay ">
              <label>Regular Fee per Person :  Rs <?php echo $row["cost"];?></label>

              <br>
                <p>
                  This is only for if you are paying directly to             
                  Eye Plus Travels.
                  Please Contact us and reserve your opportunity.
                  Hurry Up!!!
                </p>

            </div><!-- offline -->

            


         


          






        </div><!-- provider-info -->



        <div class="online-pay">
          <label>Online Reservation</label>
     
          
              <p>
          The aditional 2% cost will charge here.
          <br>
          Cost per Person : Rs <?php echo ($row["cost"] * 0.02 + $row["cost"]);?>
        </p>

     
         

          
              
       <!--       <td><input type="number" id="person" name="" required=""  placeholder="Number of Persons" style="height: 30px; border-radius: 5px; border:solid; background: none; font-weight: bold;"></td>   
          </tr>

          <tr>
            <td><input type="date" name="" required="" placeholder=" Number of Persons" style="height: 30px; width:172px; border-radius: 5px; border:solid; background: none; font-weight: bold;"></td>
          </tr>
 -->


           


<form action="admin.php" method="POST">
	            <input type="hidden" value="<?php echo $row['addid'];?>" name="advertisingid">
                <input type="hidden" value="Accept" name="txtaccept"> 
                <input type="hidden" value="Reject" name="txtpending">
	<button  name="btnaccept" class="">Confirm the Add</button>
    <button  name="btnpending" class="">Ignore</button>
</form>

		
<?php
if(isset($_POST["btnaccept"]))
{
  include('config/connection.php');
  $sql1="UPDATE postadd SET adminstatus='".$_POST["txtaccept"]."' where id = '".$_POST["advertisingid"]."'";
  if(mysqli_query($con,$sql1)){

    echo '
    <script>
    function myFunction() {
        confirm("Do you want to Accept?");
    }
    </script>
    ';



  }
}  


if(isset($_POST["btnpending"]))
{
  include('config/connection.php');
  $sql1="UPDATE postadd SET adminstatus='".$_POST["txtpending"]."' where id = '".$_POST["advertisingid"]."'";
  if(mysqli_query($con,$sql1)){
      echo'success';
  }
} 

?>
     

        </div><!-- online-pay -->

   
</center>

    </div><!-- single-activity-right
 -->


  </div><!-- main-single -->
 

</div><!-- single-sctivity-main -->

<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->
<?php
    include('common/footeradmin.php');
?>