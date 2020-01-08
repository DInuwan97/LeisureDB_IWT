<?php
    include('common/headeradmin.php');
?>


<?php
    include('separatecss/paymentstyle.php');
?>

<?php
 $id=$_GET['id'];
?>

<body>

	<div class="content">


	 <center>
	 	<br>
	 	<div class="messege clearfix">
	 		<br>
			<center><i class="far fa-check-circle fa-6x"></i></center>
			

			<center>
			<p>
				Congratulations! 
					Your addvertiesement is ready to publish.
				<br>
				Continue the Payment
			</p>

			<?php
					include('config/connection.php');
			?>

			<form action="" method="POST">
				
			</form>
			

			<?php
				

		
						 //$postaddid = $_POST['postaddid'];
						// $_SESSION["postaddid"] = $postaddid;
			

					$sql="SELECT  d.id as 'activeaddid' ,d.postid,d.paymentstatus,p.id,p.servicename,p.description,p.image,p.usermail,p.cost,p.category,r.email,r.fname,r.lname,r.mobile FROM displayadd d,postadd p,register r where d.paymentstatus = 'Pending' AND 
					p.id = d.postid AND p.usermail = r.email AND d.postid = $id "; 
					
					$qry=mysqli_query($con,$sql);

					if($row = mysqli_fetch_array($qry))
					{
					$_SESSION["postaddid"]=$id;
	
			?>


				
			<table border="0">
	
				
				<tr style="height: 35px;">
					<td style="width:200px;">Service Name</td>
					<td style="width: 200px;"><?php echo $row["servicename"]; ?></td>
				</tr>
				<tr style="height: 35px;">
					<td style="width:200px;">Category</td>
					<td style="width: 140px;"><?php echo $row["category"]; ?></td>
				</tr>
				<tr style="height: 35px;">
					<td style="width:200px;">Provider Name</td>
					<td style="width: 200px;"><?php echo $row["fname"]; ?><?php echo $row["lname"]; ?></td>
				</tr>
				<tr style="height: 35px;">
					<td style="width:200px;">Service Charge</td>
					<td style="width: 140px;">Rs <?php echo $row["cost"]; ?></td>
				</tr>
				<tr style="height: 35px;">
					<td style="width:200px;">Addvertising Charge</td>
					<td style="width: 140px;">Rs 900.00</td>
				</tr>
	
			</table>


					 <?php
		}
	?>

			<td><button type="button" class="">

					<a href="paymentgate.php?id=<?php echo $row["postid"]; ?>" style="text-decoration:none; color:purple;">ORDER</a>

			</button></td>

			</center>
		
		</div><!-- messege -->
	 </center>

		
	</div><!-- content -->



</body>

<?php
    include('common/footeradmin.php');
?>