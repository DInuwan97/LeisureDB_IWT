

<?php
    include('common/headeradmin.php');
?>


<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->
<?php
	include('config/connection.php');

	//$sql="SELECT * FROM displayadd d,postadd p WHERE p.category AND d.adminstatus = 'Accept' d.paymentstatus = 'Pending'"; 
	$sql="SELECT  * FROM displayadd where paymentstatus = 'Pending'"; 
	$qry=mysqli_query($con,$sql);

	if($row=mysqli_fetch_array($qry))
	{

	}










?>



<div class="body-page-admin">
  



    <div class="description">

     

      <div class="des-image clearfix">
          <img class="mySlides w3-animate-fading" src="img/hiking2.jpg" style="width:95%; height:400px; margin-left: 20px; border-radius:7px;">
           <img class="mySlides w3-animate-fading" src="img/cycle.jpg" style="width:95%; height:400px; margin-left: 20px; border-radius:7px;">
           <img class="mySlides w3-animate-fading" src="img/camp.jpg" style="width:95%; height:400px; margin-left: 20px; border-radius:7px;">
           <img class="mySlides w3-animate-fading" src="img/hiking.jpg" style="width:95%; height:400px; margin-left: 20px; border-radius:7px;"> 
      </div><!-- des-image -->


      <div class="des-image clearfix">
            <div class="des-txt">
              <h1>What is called <h2>Leisure DB?</h2></h1>

              	<div class="what-is-LeisureDB">
              		<p><i class="fas fa-quote-left fa-3x"></i>
              			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             			reprehenderit in voluptate velit esse
              			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              			proident, sunt in culpa.  sint occaecat cupidatat.
              			
              		</p>


              		        	<h3 class="our-activities">OUR ACTIVITIES <i class="fas fa-arrow-down fa-1x"></i></h3>

              	</div><!-- what-is-LeisureDB -->





            </div><!-- des-txt -->

      </div><!-- des-image -->
        
        

        
             



 

 
  
</div><!-- descriptuon -->










<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}
</script>




    <div class="product-content clearfix" >



      <div class="store-content clearfix " >
      	<br><br>
        <h1 style="margin-left: 55px;"> Now Leisure DB on your mobile</h1>
        <br>
        <table border="0">
          <tr>
            <td><a href="#product-content"><img src="img/app_store.png" class="apple"></a></td>
            <td><a href="#product-content"><img src="img/play_store.png" class="android"></a></td>
          </tr>
          
          <tr>
            <center>
              <td><a href="#product-content"><img src="img/windows_store.png" class="windows"></a></td>
            </center>           
          </tr>

        </table>

      </div><!-- store-content -->


      <div class="activity-content clearfix ">



      	<div class="quick-activity-col clearfix">

      		<center>
      				<div class="single-content-activity">
      					<a href="activities-hiking.php"><img src="img/a1.jpg" style="width:100%; height: 100%; border-radius: 5px;"></a>
      					<!-- <div class="centered"><h1><a href="#ffef" style="text-decoration: none;">Hinking</h1></a></div> -->
      				</div><!-- single-content-activity -->


      				<div class="single-content-activity">    					
      					<a href="activities-swimming.php"><img src="img/a4.jpg" style="width:100%; height: 100%; border-radius: 5px;"></a>
      	<!-- 				<div class="centered"><h1><a href="#asasd" style="text-decoration: none;">Swimming</h1></a></div> -->
      				</div><!-- single-content-activity -->

      		</center>
      	
      	</div><!-- quick-activity-col -->

      	<div class="quick-activity-col clearfix">
      		
      		<center>
      				<div class="single-content-activity">
      						<a href="activities-camping.php"><img src="img/a2.jpg" style="width:100%; height: 100%; border-radius: 5px;"></a>
      						<!-- <div class="centered"><h1><a href="#asas" style="text-decoration: none;">Camping</h1></a></div> -->
      				</div><!-- single-content-activity -->


      				<div class="single-content-activity">
      					<a href="activities-rasting.php"><img src="img/a5.jpg" style="width:100%; height: 100%; border-radius: 5px;"></a>
      					<!-- <div class="centered"><h1><a href="#sas" style="text-decoration: none;">Rasting</h1></a></div> -->
      				</div><!-- single-content-activity -->

      		</center>

      	</div><!-- quick-activity-col clearfix -->





      	<div class="quick-activity-col clearfix">
      		
      			<center>
      				<div class="single-content-activity">
      					<a href="activities-tourism.php"><img src="img/a3.jpg" style="width:100%; height: 100%; border-radius: 5px;"></a>
      					<!-- <div class="centered"><h1><a href="#aaa" style="text-decoration: none;">Tourism</h1></a></div> -->
      				</div><!-- single-content-activity -->


      				<div class="single-content-activity">
      					<a href="activities-sports.php"><img src="img/a6.jpg" style="width:100%; height: 100%; border-radius: 5px;"></a>
      					<!-- <div class="centered"><h1><a href="#cscsd" style="text-decoration: none;">Gym</h1></a></div> -->
      				</div><!-- single-content-activity -->

      		</center>
      	</div><!-- quick-activity-col -->
     




    
      	
    

      </div><!-- activity-content -->


    </div><!-- product-content -->


</div>

<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->


<?php
    include('common/footeradmin.php');
?>