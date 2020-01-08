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
     


           /* $sqlcheck="SELECT d.postid,d.checkby,p.paymentstatus as 'paymentstatus',p.id,p.adminstatus as 'adminstatus',p.servicename,p.category,p.usermail,p.status,p.date,s.fname as 'stafffname',
            s.lname as 'stafflname',s.email,s.status as 'staffpost',r.fname,r.lname
            FROM displayadd d,postadd p,staff s,register r WHERE p.usermail = '".@$_SESSION["email"]."'
             AND p.id = d.postid AND d.checkby = s.email  AND r.email = p.usermail
             AND (p.paymentstatus='Pending' OR p.paymentstatus='Accept' OR p.adminstatus = 'Reject' OR p.adminstatus = 'Accept' OR p.adminstatus = 'Pending') ORDER BY d.id DESC";


             $sqlcheck = "SELECT l.checkout,l.postid,p.id,p.servicename,r.email,r.fname,r.lname,m.payid,m.paytotal FROM
             list l,postadd p,register r,payment m WHERE l.checkout = 'PAID' AND l.postid = p.id AND l.paymentid = m.payid AND l.customermail = '".@$_SESSION["email"]."'";







            */

            $sqlcheck = "SELECT * FROM
           payment m, register r WHERE m.purchasemail = '".@$_SESSION["email"]."' AND r.email = '".@$_SESSION["email"]."' ";

            $qrycheck=mysqli_query($con,$sqlcheck);
               
            $sessionhide = $_SESSION["email"];
            
            echo '              
            <form action="" method="POST">
              <input type="text" name="sessionhide" value='.$_SESSION["email"].'>
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
             
          ?>
        
        <div class="dashboard-message" style="height:110px;" >
            <table border="0">
              <tr>
                <td><i class="fas fa-user-circle fa-3x"></i></td>
                <td><label>Leisure DB</label><p>System</p></td>
              </tr>
            </table>

            <p class="notification">
                 Congragulations <?php echo $rowcheck['fname'];?> <?php echo $rowcheck['lname']; ?>. Your have purchased
               <?php echo $rowcheck["paytotal"] ?>.
                  Please verify your addvertising payment via beloow portal.
                  
            </p>  


              
      </div>





        <?php
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
                  <li><a href="#dashbord-message" id="manage-adds" class="active">My Adds</a></li>
                  <li><a href="#dashbord-message" id="manage-providers">Manage Providers</a></li>
                  <li><a href="#dashbord-message" id="manage-customers">Manage Customers</a></li>
                  <li><a href="#dashbord-message" id="owner-messages">Owner's Messages</a></li>
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