<?php
    include('common/headeradmin.php');
?>

<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->

<div class="body-page-admin">
	
<script src="js/contentscriptowner.js"></script>



    <dive class="page-title">
      <br>
      <h1><i class="fas fa-cogs fa-1x"></i>Owner Profile</h1>
    </dive><!-- page-title -->
         
    <div class="customer-profile">


    
      <div class="user-dashboard">
        <h1>Your Dashboard</h1>


        <div class="sub-dashboard">


        <?php
        
        if(!(@$_SESSION["emailstaff"] == NULL) && (@$_SESSION["email"] == NULL))
        {
          
          $sql= "SELECT * FROM staff WHERE  email = '".@$_SESSION["emailstaff"]."'";
          $qry=mysqli_query($con,$sql);      
          $row = mysqli_fetch_array($qry);

        $sqlcheck = "SELECT p.id as 'addid',p.servicename,p.category,p.cost,p.usermail,d.id as 'publishid',d.postid,
        r.id as 'registerid',r.fname,r.lname,r.email,r.mobile,r.status FROM postadd p,displayadd d,register r WHERE d.postid = p.id AND p.usermail = r.email ";
        
        $qrycheck=mysqli_query($con,$sqlcheck);
        
       /*
        $sqlstaff = "SELECT p.id as 'addid',p.servicename,p.category,p.cost,p.usermail,p.adminstatus,p.paymentstatus,d.id as 'publishid',d.postid,
        s.id as 'staffid',s.fname,s.lname,s.email,s.mobile,s.status,s.confirmation FROM postadd p,displayadd d,staff s WHERE d.postid = p.id AND p.usermail = s.email AND
         p.adminstatus = 'Pending' AND p.paymentstatus = 'Pending'";
       */
      
        //$qrystaff=mysqli_query($con,$sqlstaff);


        $sqlregisterstaff = "SELECT * FROM staff WHERE confirmation = 'Pending' ";
        $qryregisterstaff=mysqli_query($con,$sqlregisterstaff);

        //$sqlregister = "SELECT * FROM staff";


        $sql_adm_postadd = "SELECT s.fname,s.lname,s.status,s.status,s.email,p.id as 'addid',p.usermail,p.adminstatus,p.paymentstatus,p.servicename,p.category FROM staff s,postadd p
        WHERE s.status = 'Admin' AND p.adminstatus = 'Pending' AND p.paymentstatus = 'Pending' AND s.email = p.usermail ";
        $qry_adm_postadd = mysqli_query($con,$sql_adm_postadd); 



    
          $sessionhide = $_SESSION["emailstaff"];
       
    
          echo '              
          <form action="" method="POST"></form>
            <input type="hidden" name="sessionhide" value= "'.$_SESSION["emailstaff"].'">
          </form>
          ';
      
        }

      ?>



         <?php
          while( $row_adm_postadd = mysqli_fetch_array($qry_adm_postadd))
          {
          ?>
          

        <div class="dashboard-message">
          
            <table border="0">
              <tr>
                <td><i class="fas fa-user-circle fa-3x"></i></td>
                <td><label><?php echo  $row_adm_postadd["fname"];?> <?php echo  $row_adm_postadd["lname"];?></label><p><?php echo  $row_adm_postadd["status"];?></p></td>
              </tr>
            </table>

            <p class="notification">
            System Admin <?php echo  $row_adm_postadd['fname'];?> <?php echo  $row_adm_postadd['lname']; ?> request you to publish 
            a Leisure Activity named <?php echo $row_adm_postadd["servicename"]?> in a category of <?php echo $row_adm_postadd["category"] ?> at
            Leisure DB.Verify the requested and confirm the advertising cost.
            <a href="preview-owner.php?id=<?php echo $row_adm_postadd["addid"]; ?>" style="color:yellow;"><b>Click here To View</b></a>
            </p>





        <form action="" method="POST">

                <input type="hidden" value="<?php echo$row_adm_postadd["addid"];?>" name="advertisingid">
                <input type="hidden" value="Accept" name="txtaccept"> 
                <input type="hidden" value="Accept" name="txtpayment">

            <table border="0">
              <tr>
              <td> <button  class="admin-reject" style="margin-left:5px;"><i class="fas fa-times-circle"></i><!-- <a href="#dkalu">Accept</a> -->Reject</button></td>
                <td><button class="admin-accept" name="btnconfirm" style="width:280px; margin-left:1px; "><i class="fas fa-check-square"></i><!-- <a href="#dkalu">Accept</a> --> Confirm the Advertising cost & Publish</button></td>
              </tr>
            </table>

        </form> 






                  
               
                <!-- <button class="admin-reject"><i class="fas fa-times-circle"></i><a href="#dkalu">Accept</a>Reject</button> -->
                    
        </div><!-- dashboard-message -->

        <?php
          }
        ?>







          <?php
              if(isset($_POST["btnconfirm"]))
              {
                include('config/connection.php');
                $sql1="UPDATE postadd SET adminstatus='".$_POST["txtaccept"]."',paymentstatus='".$_POST["txtpayment"]."' where id = '".$_POST["advertisingid"]."'";
                if(mysqli_query($con,$sql1)){

                  echo '
                  <script>
                  function myFunction() {
                      confirm("Do you want to Accept?");
                  }
                  </script>
                  ';



                }

                $checkby = $_SESSION["emailstaff"];
                $paymentstatus = $_POST["txtpayment"];
                $postid = $_POST["advertisingid"];

                $sql2 = "INSERT INTO displayadd(postid,checkby,paymentstatus) VALUES ('$postid','$checkby','$paymentstatus')";

                if (mysqli_query($con,$sql2)) {

                 echo 'Successfully Confirmed!';
                }
              } 
          ?>






          


        <?php
          while($rowcheck=mysqli_fetch_array($qrycheck))
          {
        ?>


        <div class="dashboard-message" style="height:200px; margin-bottom:2px;">
          
            <table border="0">
              <tr>
                <td><i class="fas fa-user-circle fa-3x"></i></td>
                <td><label><?php echo $rowcheck["fname"];?><?php echo $rowcheck["lname"];?></label><p><?php echo $rowcheck["status"];?></p></td>
              </tr>
            </table>

            <p class="notification">

              <table border="0" style="font-size:12px; margin-left:30px; font-weight:bold;">
              <tr>
                <td>Activity Name</td>
                <td> : </td>
                <td><?php echo $rowcheck["servicename"];?></td>
              </tr>

              <tr>
                <td>Category</td>
                <td> : </td>
                <td><?php echo $rowcheck["category"];?></td>
              </tr>

              <tr>
                <td>Cost per Person</td>
                <td> : </td>
                <td>Rs <?php echo $rowcheck["cost"];?></td>
              </tr>

              <tr>
                <td>Contact</td>
                <td> : </td>
                <td><?php echo $rowcheck["mobile"];?></td>
              </tr>

              <tr>
                <td>Email</td>
                <td> : </td>
                <td><a href="mailto:<?php echo $rowcheck["email"]; ?>" style="color:black; text-decoration:none;"</a><?php echo $rowcheck["email"];?></td>
              </tr>
            
              </table>

<br>
                <td><button name="btnaccept" class="admin-accept"><i class="fas fa-check-square"></i><!-- <a href="#dkalu">Accept</a> -->Accept</button></td>
                      <td> <button name="btnpending" class="admin-reject"><i class="fas fa-times-circle"></i><!-- <a href="#dkalu">Accept</a> -->Reject</button></td>

    
            </p>
             
               
                
                    
        </div><!-- dashboard-message -->

        <?php
          }
        ?>


          

          <?php    
            while($rowregisterstaff = mysqli_fetch_array($qryregisterstaff))
            {
          ?>


        <div class="dashboard-message">
          
            <table border="0">
              <tr>
                <td><i class="fas fa-user-circle fa-3x"></i></td>
                <td><label><?php echo $rowregisterstaff["fname"];?> <?php echo $rowregisterstaff["lname"];?></label><p>Request for<?php echo $rowregisterstaff["status"];?></p></td>
              </tr>
            </table>

            <p class="notification">
            Mr.<?php echo $rowregisterstaff['fname'];?> <?php echo $rowregisterstaff['lname']; ?> request you to become an <?php echo $rowregisterstaff["status"]; ?>.
            View the CV in bellow link.
      
            </p>





        <form action="" method="POST">

                <input type="hidden" value="<?php echo $rowregisterstaff["id"];?>" name="txtstaffid">
                <input type="hidden" value="Accept" name="txtstaffconfirmation"> 
                <input type="hidden" value="Accept" name="">

            <table border="0">
              <tr>
              <td><button name="" class="admin-reject" style="margin-left:5px;"><i class="fas fa-times-circle"></i><!-- <a href="#dkalu">Accept</a> -->Reject</button></td>
                <td><button class="admin-accept" name="btnacceptstaff" style="width:280px; margin-left:1px; "><i class="fas fa-check-square"></i><!-- <a href="#dkalu">Accept</a> --> Confirm the Advertising cost & Publish</button></td>
              </tr>
            </table>

        </form> 



                  
               
                <!-- <button class="admin-reject"><i class="fas fa-times-circle"></i><a href="#dkalu">Accept</a>Reject</button> -->
                    
        </div><!-- dashboard-message -->

        <?php
          
        }
        ?>


        
        <?php
              if(isset($_POST["btnacceptstaff"]))
              {
                include('config/connection.php');
                $sqlconfirmstaff="UPDATE staff SET confirmation='".$_POST["txtstaffconfirmation"]."' where id = '".$_POST["txtstaffid"]."'";
                if(mysqli_query($con,$sqlconfirmstaff)){

                  echo '
                  <script>
                  function myFunction() {
                      confirm("Do you want to Accept?");
                  }
                  </script>
                  ';
              
              
              
                }
              }


        ?>









<!-- ------------------------------------------first massage---------------------------- -->





        </div><!-- sub-dashboard -->


      </div><!-- dashbord -->

      <div class="user-settings clearfix">
        <h1>Owner's Control Panel</h1>

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
                  <li><a href="#dashboard-message" id="manage-adds" class="active">Active Adds</a></li>
                  <li><a href="#dashboard-message" id="other-adds">Other Adds</a></li> 
                  <li><a href="#dashboard-message" id="manage-providers"> Providers</a></li>
                  <li><a href="#dashboard-message" id="manage-customers"> Customers</a></li>
                  <li><a href="#dashboard-message" id="manage-staff"> Staff</a></li>
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