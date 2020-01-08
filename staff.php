<?php
    include('common/headeradmin.php');
?>


<?php
    include('separatecss/registerstyle.php');
?>
  <script src="js/register.js"></script>

<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->












<div class="container">

    <div class="sub-container">
	<center>
      <h1>Get Your Job Opportunities</h1>
      <p>(Staff Only)</p>
    </center><br><br>
   




	<!-- --------------php begin inser values into register form----------------- -->



   <?php
  if (isset($_POST["btnsubmit"])){
    
      include('config/connection.php');

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $postalCode = $_POST['postalCode'];
        $accnum = $_POST['accountNumber'];
        $email = $_POST['email'];
        $mobile = $_POST['contactNumber'];
        $address = $_POST['address'];
        $status = $_POST['status'];
		$pword = $_POST['pword'];
        $cpword = $_POST['cpword'];
        $hidestatus = $_POST['hidestatus'];

        $sql="INSERT INTO staff(fname,lname,mobile,email,address,postalcode,accountnum,status,pword,cpword,confirmation)
        VALUES('$fname','$lname','$mobile','$email','$address','$postalCode','$accnum','$status','$pword','$cpword','$hidestatus')";


        				 
						if(mysqli_query($con,$sql)){
							 
                            echo '
                            <div>
                            Thank You '.$fname.' !!</br> You have successfully registered..
                            </div>					 
                            ';
                            
                        }else{

                               die(mysqli_error($con));

                             }
               
                            }        
                        
                       
?> 






<!-- -----------------php end------------------------------------------------------ -->





		<form method="POST" action=""  class="form">
			<div>
				<label class="label"><b>Name :</b></label><br>
                <input type="text" name="fname" class="input" placeholder="First Name" id="fname" required="">
				<span id="fnameid" style="color:red;"></span>
                <input type="text"name="lname" class="input" placeholder="Last Name" id="lname">
				<span id="lnameid" style="color:red;"></span>
				<br><br>
            </div>
			<div>
			    <label class="label"><b>Email :</b></label><br>
                <input type="email" name="email" class="input" placeholder="...........@gmail.com" id="email">
				<span id="emailid" style="color:red;"></span>
				<br><br>	
			</div>
			<div>	
				<label class="label"><b>Contact Number :</b></label><br>
                <input type="text" class="input" name="contactNumber" id="contactNumber"><br><br>
				<span id="contactid" style="color:red;"></span
			</div>	
			<div>
				<label class="label"><b>Postal Code :</b></label><br>				
                <input type="text" class="input" name="postalCode" placeholder="Enter Postal Code" id="pCode"><br><br>
            </div>              
			<div>
				<label class="label"><b>Adderess :</b></label><br>	
                <textarea rows="4" cols="21" placeholder="Enter Your Address Here" id="address" name="address"></textarea><br><br>	
            </div>            
            <div>            
				<label class="label"><b>Apply As :</b></label><br>			
                   <select name="status">
				     <option value="Admin">Admin</option>
					 <option value="Owner">Owner</option>
				   </select>
				  <br><br>
			</div>       
            <div>           
                <label class="label"><b>Account Number :</b></label><br>	
                <input type="text" name="accountNumber" class="input" placeholder="XXXXXXXXXX" id="accNum"><br><br>	
			</div>	
			<div>	
                <label class="label"><b>Password :</b></label><br>	
                <input type="password" name="pword" class="input" placeholder="......" id="psswrd">
				<span id="password" style="color:red;"></span>
			</div>	
			<div>				
                <label class="label"><b>Confirm Password :</b></label><br>	
				<input type="password" name="cpword" class="input" placeholder="Re-enter password" id="con_psswrd">
				<span id="conpassword" style="color:red;"></span>
			</div>

            <input type="hidden" name="hidestatus" value="Pending">	
			
                <center>        
                  <button type="submit" class="register-btn"  name="btnsubmit">Register Now</button><br><br>


 </form>


				<p><b>Add Your Personal Details From</b></p>
				<div class="btn">
				<a href="#" class="fb">
				<i class="fa fa-facebook fa-fw"></i> Login with Facebook
				</a><br><br>
				<a href="#" class="google"><i class="fa fa-google fa-fw"></i> Login with Google+
				</a>
				</div><br><br>
				</center>
        
			
<center class="bottom-link">
	<a href="#"><p>Are you already a member ?</p>
	<p>Click here to Login</p></a>
</center>
		
			
		
    </div>

</div>



<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->

<?php
    include('common/footeradmin.php');
?>