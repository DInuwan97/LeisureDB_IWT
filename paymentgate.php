<?php
    include('common/headeradmin.php');
?>
<?php
    include('separatecss/paymentgatestyle.php');
?>




<body>

<script src="js/paycontent.js"></script>
	<div class="paymet-head clearfix">
		<center>
		<!-- <img src="img/paymentgate.png" alt="" style=" width:80px; height:80px; border:none; border-radius:20px; margin-top:5px;">--> 
		<h1 style="margin-top:15px;">Paymet Gate</h1> 
		</center>
	
	</div><!-- paymet-head -->



	<div class="content">


<?php
include('config/connection.php');
if(isset($_POST["btncheckout"]))
{
  $newbalance = $_POST["newbalance"];
  $paymentstatus = $_POST["paymentstatus"];
  $accountnum = $_POST["bankaccount"];  

  if($newbalance >= 0 )
  {
 

    $sqlupdate = "UPDATE displayadd d,postadd p,bank b SET d.paymentstatus = '".$_POST["paymentstatus"]."', p.paymentstatus = 
    '".$_POST["paymentstatus"]."', b.balance='".$_POST["newbalance"]."' WHERE d.postid = '".@$_SESSION["postaddid"]."'
     AND p.id = '".@$_SESSION["postaddid"]."' AND b.accountnum = '{$accountnum}' ";

         if(mysqli_query($con,$sqlupdate))
         {
			echo '
			<script>
			window.location = "successmsg.html"
			</script>
			';                
         }
      }
  else
  {

  	
  echo '
  		<center>
  			<span class="label danger" style = "color: white;  padding:8px; width:350px; background-color: #f44336;" >Insufficent Balance</span>
  		<center>
  ';
  }
}

?>


<?php

if(isset($_POST["btnpaycard"]))
{



	$sqlcheckpwd = "SELECT * FROM bank WHERE accountnum = '{$accountnum}' AND pwd = '{$pwd}'";
	$qrycheckpwd = mqsqli_query($con,$sqlcheckpwd);

	if($rowcheckpwd = mysqli_fetch_array($qrycheckpwd))
	{

    	  if($newbalance >= 0 )
  		  {
 			

			    $sqlupdate = "UPDATE displayadd d,postadd p,bank b SET d.paymentstatus = '".$_POST["paymentstatus"]."', p.paymentstatus = 
			    '".$_POST["paymentstatus"]."', b.balance='".$_POST["newbalance"]."' WHERE d.postid = '".@$_SESSION["postaddid"]."'
			     AND p.id = '".@$_SESSION["postaddid"]."' AND b.accountnum = '{$accountnum}' ";

			         if(mysqli_query($con,$sqlupdate))
			         {
						echo '
						<script>
						window.location = "successmsg.html"
						</script>
						';         
					 }
					 



			}//$newbalance >= 0 

  		  else
  		  { 	
		  echo '
		  		<center>
		  			<span class="label danger" style = "color: white;  padding:8px; width:350px; background-color: #f44336;" >Insufficent Balance</span>
		  		<center>
		  ';
		  }//Insufficent Balance

	} //invalid account number or password

	else{
		echo'
				<center>
		  			<span class="label danger" style = "color: white;  padding:8px; width:350px; background-color: #f44336;" >Invalid Account Number or Passowrd</span>
		  		<center>
		';

	}
	
	
}



?>



	 <center>
	 	<br>
	 	<div class="messege clearfix">
	 		<br>

    <div class="navigation-bar clearfix">
		<nav>
			<div class="nav-links">
				<ul>
					<li><a href="#nav-links" id="account" class="active"><img src="img/bank.png" alt="" style="width:80px; height:80px; border:none;
					border-radius:30px;" ><br>Account</a></li>
					<li><a href="#nav-links" id="card"><img src="img/card.png" alt="" style="width:80px; height:80px; border:none;
					border-radius:30px;"><br>Card</a></li>
				</ul>
			</div><!-- nav-links -->
		</nav>




		</div><!-- navigation-bar" -->

			<center>
			<br>

			<method>
	
			</method>
	
			<br>
							
		

			</center>
		
		</div><!-- messege -->
	 </center>
	
	 	<br>
		<center>
			<img src="img/crecard.png" style="width:200px; height:30px;"   alt="">
		
		</center>	



	</div><!-- content -->













</body>

<?php
    include('common/footeradmin.php');
?>