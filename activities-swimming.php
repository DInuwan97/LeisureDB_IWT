<?php
    include('common/headeradmin.php');
?>

<?php
    include('separatecss/activities.php');
?>




<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->

<div class="main-title">
	<marquee><h1 style="color:#ff66cc;font-size:70px;">Leisure Activities</h1></marquee>

</div>
	<div><hr></div>

<?php
	include('config/connection.php');

	//$sql="SELECT * FROM displayadd d,postadd p WHERE p.category AND d.adminstatus = 'Accept' d.paymentstatus = 'Pending'"; 
	$sql="SELECT  d.id as 'activeaddid' ,d.postid,d.paymentstatus,p.id,p.servicename,p.image,p.usermail,p.category,r.email,r.fname,r.lname FROM displayadd d,postadd p,register r where d.paymentstatus = 'Accept' AND 
	p.id = d.postid AND p.usermail = r.email AND p.category = 'Swimming' AND d.paymentstatus = 'Accept'"; 
	$qry=mysqli_query($con,$sql);


?>

 


<!-- Slideshow container -->
<div class="slideshow-container">
		
  <div class="mySlides fade">
  <u><h1><center>Tourism</center></h1></u>
    <div class="numbertext">1 / 4</div>
	<div>

	<center>
	<table border="0" >



	
	<tr>
	<?php
			$count = 1;
			while($row=mysqli_fetch_array($qry))
			{
			
	?>


					<?php

					print("count is $count");
	
						  if($count <= 3)
							{
					?>

				
						<td><div class="table_data"><a href="single.php?id=<?php echo $row["activeaddid"] ?>"><img class="table_img" src="imgserver/<?php echo $row["image"]; ?>"/><br></a><center><?php echo $row["servicename"]; ?></center><br>&nbspOfferd by: <?php echo $row["fname"];?>  <?php echo $row["lname"];?></div></td>

					
					

						 <?php	
						 $count++;
							}
							else{
						 ?>


						<tr></tr>


						<td><div class="table_data"><a href="single.php?id=<?php echo $row["activeaddid"] ?>"><img class="table_img" src="imgserver/<?php echo $row["image"]; ?>"/><br></a><center><?php echo $row["servicename"]; ?></center><br>&nbspOfferd by: <?php echo $row["fname"];?>  <?php echo $row["lname"];?></div></td>
							
						 <?php

						  $count =1;						
						   }

						 ?>

						

	<?php
		}
	?>
	</tr>






	
	



	</table>
	</center>
	</div>
</div>
</div>




  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>  
</div>					  

<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
<?php
    include('common/footeradmin.php');
?>