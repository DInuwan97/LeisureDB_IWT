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

	//$sql="SELECT * FROM displayadd d,postadd p WHERE p.category AND d.adminstatus = 'Accept' d.paymentstatus = 'Pending'"; 
	$sql="SELECT  d.id as 'activeaddid' ,d.postid,d.paymentstatus,p.id,p.servicename,p.description,p.image,p.usermail,p.cost,p.category,r.email,r.fname,r.lname,r.mobile FROM displayadd d,postadd p,register r where d.paymentstatus = 'Accept' AND 
	p.id = d.postid AND p.usermail = r.email AND d.id = $id" ; 
	$qry=mysqli_query($con,$sql);

   if($row = mysqli_fetch_array($qry)) 
    {
?>



  <div class="main-single">
      <div class="single-activity-left clearfix">
      <h2>
        <?php echo $row["servicename"]; ?>
      </h2>

      <h5></h5>

<center>
  <div class="activity-image">
    <div class="thumb-image detail_images">
            <img src="imgserver/<?php echo $row["image"] ?>" style="width:100%; height: 100%;"  data-imagezoom="true" class="img-responsive" alt="">
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
                <td style="margin-top: 15px;"><?php echo $row["fname"];?><?php echo $row["lname"];?></td>
              </tr>

              <tr>
                <td style="width:20px;"><i class="fas fa-phone fa-2x"></i></td>
                <td></td>
                <td></td>
                <td> <?php echo $row["mobile"];?></td>
              </tr>

              <tr>
                <td style="width:20px;"><i class="fas fa-envelope-square fa-2x"></i></td>
                <td></td>
                <td></td>
                <td><a href="mailto:<?php echo $row["email"];?>" style="text-decoration: none;"><?php echo $row["email"];?></a></td>
              </tr>

            </table>


            <div class="offline-pay ">
              <label>Regular Fee per Person :  Rs <?php echo $row["cost"]; ?></label>

              <br>
                <p>
                  This is only for if you are paying directly to             
                  <?php echo $row["fname"];?> <?php echo $row["lname"];?>.
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

        <table>
          <tr>

              <script src="js/script.js"> </script>  
    
          <form action=""method="POST">
             <td><input type="number" id="persons" name="persons" required="" placeholder="Number of Persons" style="height: 30px; border-radius: 5px; border:solid; background: none; font-weight: bold;"></td>   
          </tr>

          <tr>
            <td><input type="date" required="" name="date"  style="height: 30px; width:172px; border-radius: 5px; border:solid; background: none; font-weight: bold;"></td>
          </tr>

        </table>

<?php
include('config/connection.php');
$sqllist = "SELECT cartid FROM mycart ORDER BY cartid DESC LIMIT 1";
$qrylist = mysqli_query($con,$sqllist);

$rowlist = mysqli_fetch_array( $qrylist);

?>












      
      <input type="hidden" name="displayaddid" value="<?php echo $row ["activeaddid"];?>">
      <input type="hidden" name="postaddid" value="<?php echo $row ["postid"];?>">
      <input type="hidden" name="useremail" value="<?php echo $row ["email"];?>">
      <input type="hidden" name="servicename" value="<?php echo $row ["servicename"];?>">
      <input type="hidden" name="unitprice" id="unitprice" value="<?php echo $row["cost"];?>">
      <input type="hideen" name="txtcartid" value="<?php echo $rowlist["cartid"] + 1; ?>">
      
      <input type="text" name="calculate" id="calculate">
         
          <button name="btnaddcart" class="">Add To Cart</button>
      </form>

      
      <?php
        if(isset($_POST["btnaddcart"]))
      {
          $displayaddid = $_POST["displayaddid"];
          $postaddid = $_POST["postaddid"];
          $provideremail = $_POST["useremail"];
          $servicename = $_POST["servicename"];
          $total = $_POST["calculate"];
          $persons = $_POST["persons"];
          $date = $_POST["date"];
          $unitprice = $_POST["unitprice"];
          $cartid = $_POST["txtcartid"];
          

          include('config/connection.php');

          $sqlcart = "INSERT INTO mycart(cartid,displayid,postid,servicename,providermail,date,person,unitprice,total,customermail) VALUES
          ('$cartid','$displayaddid',' $postaddid ','$servicename','$provideremail','$date','$persons','$unitprice','$total','".$_SESSION["email"]."')";

          if(mysqli_query($con,$sqlcart)){
									
            echo'
              successfully add to the card!!!             
          ';

          }else
          {
            echo 'error';
          }


          $sqllist = "INSERT INTO list(displayid,cartid,postid,servicename,providermail,date,person,unitprice,total,customermail,checkout) VALUES
          ('$displayaddid','$cartid',' $postaddid ','$servicename','$provideremail','$date','$persons','$unitprice','$total','".$_SESSION["email"]."','Pending')";

          if(mysqli_query($con,$sqllist)){
									
          echo'

          successfully add to the list!!!




';

}



      }

      ?>



     <button type="button" name="btncalculate" class="" onclick="calculate();">Calculate</button>


      












        </div><!-- online-pay -->

        <?php
    }
    else{

        echo '
            <script>
            window.location = "successmsg.html"
            </script>
            ';


    }
        ?>



    


</center>

    </div><!-- single-activity-right
 -->


  </div><!-- main-single -->
 

</div><!-- single-sctivity-main -->

<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->
<?php
    include('common/footeradmin.php');
?>