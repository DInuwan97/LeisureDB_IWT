<?php
    include('common/headeradmin.php');
?>




<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->

<div class="body-page-admin">

 <script src="js/contentscript.js"></script> 	



    <dive class="page-title">
      <br>
      <h1><i class="fas fa-cogs fa-1x"></i> Service Provider Profile</h1>
    </dive><!-- page-title -->
         
    <div class="customer-profile">


    
      <div class="user-dashboard">
        <h1>Your Dashboard</h1>


        <div class="sub-dashboard">
         
         <?php           
           include('config/connection.php');       
          if(!(@$_SESSION["email"] == NULL) && (@$_SESSION["emailstaff"] == NULL))
          {
           
            $sql = "SELECT * FROM register WHERE email = '".@$_SESSION["email"]."'";
            $qry=mysqli_query($con,$sql);
     


            $sqlcheck="SELECT d.id as 'displayid',d.postid,d.checkby,p.paymentstatus as 'paymentstatus',p.id,p.adminstatus as 'adminstatus',p.servicename,p.category,p.usermail,p.status,p.date,s.fname as 'stafffname',
            s.lname as 'stafflname',s.email,s.status as 'staffpost',r.fname,r.lname
            FROM displayadd d,postadd p,staff s,register r WHERE p.usermail = '".@$_SESSION["email"]."'
             AND p.id = d.postid AND d.checkby = s.email  AND r.email = p.usermail
             AND (p.paymentstatus='Pending' OR p.paymentstatus='Accept' OR p.adminstatus = 'Reject' OR p.adminstatus = 'Accept' OR p.adminstatus = 'Pending') ORDER BY d.id ASC";
            
            $qrycheck=mysqli_query($con,$sqlcheck);
               
            $sessionhide = $_SESSION["email"];
            
            echo '              
            <form action="" method="POST">
              <input type="hidden" name="sessionhide" value='.$_SESSION["email"].'>
            </form>
            ';
      
          }

        ?>

          <?php
              while($row = mysqli_fetch_array($qry))
              {
          ?>

          
          <?php
              while($rowcheck = mysqli_fetch_array($qrycheck))
              {
                if($rowcheck["paymentstatus"] == 'Pending' && $rowcheck["adminstatus"] == 'Accept')
                {
          ?>
        
        <div class="dashboard-message">
            <table border="0">
              <tr>
                <td><i class="fas fa-user-circle fa-3x"></i></td>
                <td><label><?php echo $rowcheck['stafffname']?><?php echo $rowcheck['stafflname']?></label><p><?php echo $rowcheck['staffpost']?></p></td>
              </tr>
            </table>

            <p class="notification">
                 Congragulations <?php echo $rowcheck['fname'];?> <?php echo $rowcheck['lname']; ?>. Your add "<?php echo $rowcheck["servicename"]?>" was
                   accepted bt Leisure DB in a category of <?php echo $rowcheck["category"] ?>.
                  Please verify your addvertising payment via beloow portal.
                   <a href="payment.php?id=<?php echo $rowcheck["postid"]; ?>" style="color:yellow;"><b>Click here To Pay</b></a>
            </p>  

          
          <form action="" method="POST">

            <input type="hidden" value="<?php echo $rowcheck["postid"];?>" name="advertisingid">
                <input type="hidden" value="Accept" name="txtaccept"> 
                <input type="hidden" value="Pending" name="txtpending">
                
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
            }
        ?>

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
            <td><a href="postadd.php"">Post An Leisure Activity</a></td>
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
                  <li><a href="#dashbord-message" id="manage-adds" class="active">My Adds</a></li>
                  <li><a href="#dashbord-message" id="manage-providers">Pending Adds</a></li>
                  <li><a href="#dashbord-message" id="manage-customers">Purchased Customers</a></li>
                  <li><a href="#dashbord-message" id="owner-messages">System Notifications</a></li>
                </ul>
              </div><!-- nav-links -->
            </nav>
        </div><!-- nav-title -->
            

                <div class="navigation-bar">
            

            <main>
              
            </main>

              </div><!-- navigation-bar -->

        
       



      </div><!-- user-settings -->


  </div><!-- customer-profile -->
</div><!-- body-page-admin -->


<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->

   
<?php
    include('common/footeradmin.php');
?>