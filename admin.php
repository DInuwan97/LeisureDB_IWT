<?php
    include('common/headeradmin.php');
    
?>

<?php
if(!(@$_SESSION["emailstaff"] == NULL)){
      
}
else
{
   echo '
            <script>
                 window.location = "login.php"
                 document.write("You should login as an Admin to access this page");
            </script>

           

           ';
}
 
?>




<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->

<div class="body-page-admin">

 <script src="js/contentscript1.js"></script> 	



    <dive class="page-title">
      <br>
      <h1><i class="fas fa-cogs fa-1x"></i> Administrator Profile</h1>
    </dive><!-- page-title -->
         
    <div class="customer-profile">


    
      <div class="user-dashboard">
        <h1>Your Dashboard</h1>


        <div class="sub-dashboard">
         
         <?php

            //connect to the DB and define quries and other variables

           // include('config/connection.php');


        
          /*if(!(@$_SESSION["email"] == NULL) && (@$_SESSION["emailstaff"] == NULL))
          {
           
            $sql = "SELECT * FROM register WHERE email = '".@$_SESSION["email"]."'";
            $qry=mysqli_query($con,$sql);
            $row = mysqli_fetch_array($qry);

           // $sqlcheck = "SELECT register.fname,register.lname,register.status,postadd.servicename,postadd.category
            // FROM register,postadd WHERE register.id = postadd.userid AND register.status = postadd.status ";

            //$sqlcheck = "SELECT * FROM postadd p,register r WHERE p.usermail = r.email AND p.adminstatus = 'Pending' AND p.paymentstatus = 'Pending'";

            $qrycheck=mysqli_query($con,$sqlcheck);
            $rowcheck = mysqli_fetch_array($qrycheck);
         

          
            $sessionhide = $_SESSION["email"];
            
            echo '              
            <form action="" method="POST"></form>
              <input type="text" name="sessionhide" value='.$_SESSION["email"].'>
            </form>
            ';
      
        
          }*/

          if(!(@$_SESSION["emailstaff"] == NULL) && (@$_SESSION["email"] == NULL))
          {
            
            $sql= "SELECT * FROM staff WHERE email = '".@$_SESSION["emailstaff"]."'";
            $qry=mysqli_query($con,$sql);      
            $row = mysqli_fetch_array($qry);

            //$sqlcheck = "SELECT register.fname,register.lname,register.status,postadd.servicename,postadd.category
            //FROM register,postadd WHERE register.id = postadd.userid AND register.status = postadd.status ";

            //$sqlcheck = "SELECT * FROM postadd WHERE usermail AND adminstatus = 'Pending' AND paymentstatus = 'Pending'";

            $sqlcheck = "SELECT p.id as 'addid',p.servicename,p.category,p.usermail,p.status,p.adminstatus,p.paymentstatus,
            r.id,r.fname,r.lname,r.email,r.status
             FROM postadd p,register r WHERE 
            p.usermail = r.email AND p.adminstatus = 'Pending' AND p.paymentstatus = 'Pending' ORDER BY p.id DESC";

            $qrycheck=mysqli_query($con,$sqlcheck);
        
           // $sqlpostaddid="SELECT id FROM postadd WHERE adminstatus = 'Accept' AND paymentstatus = 'Pending'";
            //$qrypostaddid = mysqli_query($con,$sqlpostaddid);

           // $rowpostaddid = mysqli_fetch_array( $qrypostaddid);


            $sessionhide = $_SESSION["emailstaff"];
         
      
            echo '              
            <form action="" method="POST"></form>
              <input type="hidden" name="sessionhide" value= "'.$_SESSION["emailstaff"].'">
            </form>
            ';
        
          }

        ?>
          
          <?php
              while($rowcheck = mysqli_fetch_array($qrycheck))
              {
          ?>
        
        <div class="dashboard-message">
            <table border="0">
              <tr>
                <td><i class="fas fa-user-circle fa-3x"></i></td>
                <td><label><?php echo $rowcheck['fname']?><?php echo $rowcheck['lname']?></label><p><?php echo $rowcheck['status']?></p></td>
              </tr>
            </table>

            <p class="notification">
                   Service Provider <?php echo $rowcheck['fname'];?> <?php echo $rowcheck['lname']; ?> request you to publish 
                   their Leisure Activity named <?php echo $rowcheck["servicename"]?> in a category of <?php echo $rowcheck["category"] ?> at
                   Leisure DB.Verify the requested add and,if it is agree to third party send the advertising payment portal.
                   <a href="preview.php?id=<?php echo $rowcheck["addid"]; ?>" style="color:yellow;"><b>Click here To View</b></a>
            </p>  

            
  <form action="" method="POST">
  
  </form>

          
          <form action="" method="POST">

            <input type="hidden" value="<?php echo $rowcheck["addid"];?>" name="advertisingid">
                <input type="hidden" value="Accept" name="txtaccept"> 
                <input type="hidden" value="Pending" name="txtpending">
            


        <input type="hidden" name="paymentstatus" value="Pending">
                
                  <table style="margin-right:10px;">
                    <tr>
                      <td><button name="btnaccept" class="admin-accept"><i class="fas fa-check-square"></i><!-- <a href="#dkalu">Accept</a> -->Accept</button></td>
                      <td> <button name="btnpending" class="admin-reject"><i class="fas fa-times-circle"></i><!-- <a href="#dkalu">Accept</a> -->Reject</button></td>                     
                    </tr>
                  </table>

          </form>


              
               
    
        </div><!-- dashboard-message -->


        <?php
              }
        ?>

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


   $postid=$_POST['advertisingid'];
   $paymentstatus=$_POST['paymentstatus'];


  $sql2="INSERT INTO displayadd(postid,checkby,paymentstatus)VALUES('$postid','$sessionhide','$paymentstatus')";

    if(mysqli_query($con,$sql2)){
							 
    echo '
    <div>
    success
    </div>					 
    ';
    
    }else{

       die(mysqli_error($con));

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




<!-- ------------------------------------------first massage---------------------------- -->
       


        </div><!-- sub-dashboard -->


      </div><!-- dashbord -->

      <div class="user-settings clearfix">
        <h1>Admin's Control Panel</h1>

        <table border='0'>
          <tr>
            <td><a href="#"">Change Your Password</a></td>
          </tr>

          <tr>
            <td><a href="#">Update Your Account Information</a></td>
          </tr>
        </table>

        <h3><a href="#">Client's Feedback</a></h3>

        <br>
        <br>

        
    
        <div class="nav-title">
          <nav>
              <div class="nav-links">
                <ul>
                  <li><a href="#dashbord-message" id="manage-adds" class="active">Manage Adds</a></li>
                  <li><a href="#dashbord-message" id="manage-providers">Manage Providers</a></li>
                  <li><a href="#dashbord-message" id="manage-customers">Manage Customers</a></li>
                  <li><a href="#dashbord-message" id="owner-messages">Owner's Messages</a></li>
                </ul>
              </div><!-- nav-links -->
            </nav>
        </div><!-- nav-title -->
            

                <div class="navigation-bar">
            

            <main1>
              
            </main1>

              </div><!-- navigation-bar -->

        
       



      </div><!-- user-settings -->


  </div><!-- customer-profile -->
</div><!-- body-page-admin -->


<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->

   
<?php
    include('common/footeradmin.php');
?>