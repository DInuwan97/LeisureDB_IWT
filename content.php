   <?php
    session_start();
   ?>

    <div class="manage-adds">       

            <div class="navigation-name">
              <h1>Manage Your Accept Advertiesments</h1> 
              

               <button type="button"  name="create_pdf" style="margin-bottom:5px;margin-top: 10px; float:right; margin-right: 25px; height: 30px; color:white;cursor:pointer;border: none; border-radius: 5px; font-weight: bold; background: #E35C2A  ;">Create PDF</button>
            </div>
        
            <br>
            <br>

            <table class="main-tab" border= "1">
              <tr>
                <th style="width:289px">Add Title</th>
                <th style="width: 160px">Date & Time</th>
                <th style="width:70px">Admin Status</th>
                <th style="width:70px">Payemnt Status</th>
                
                <th>Control</th>
              </tr>
            </table>

      <div class="navigation-content">
                
            <table border= "1">

                <?php
                include('config/connection.php');
                $sql="SELECT * FROM postadd p,displayadd d WHERE p.id = d.postid AND p.usermail = '".$_SESSION["email"]."'";
                $qry=mysqli_query($con,$sql);

                while($row=mysqli_fetch_array($qry))
                {
                ?>

              <tr>
                <td  style="width:289px"><?php echo $row["servicename"]; ?> - (<?php echo $row["category"]; ?>)</td>
                <td style="width: 160px"><?php echo $row["date"]; ?></td>
                <td style="width:70px"><center><?php echo $row["adminstatus"]; ?></center> 
                </td>
              
                
                
                
                
                
                <td style="width:70px"><?php echo $row["paymentstatus"]; ?></td>
            
                <td>

                    <form action="" method="POST">                   	  
                          <button class="btn-view"><a href="single.php?id=<?php echo $row["id"]; ?>">View</a><i class="far fa-eye"></i></button>

                          <button class="btn-view" style="background:#C1BF48;"><a href="updateadd.php?id=<?php echo $row["id"];?>""> Update</a> <i class="fas fa-trash-alt"></i></button>

                          <button class="btn-delete" name="btndeleteadd">Remove 1<i class="fas fa-trash-alt"></i></button>
                          <input type="hidden" name="postdeleteid">                                             
                    </form>
                    
                </td>

              </tr>

     


              <?php
                }               
                mysqli_close($con);
              ?>


                       <?php
   include('config/connection.php');
   if(isset($_POST["btndeleteadd"]))
      {

        $status = $_POST["postdeleteid"];

       $sql_worker_delete = "DELETE FROM postadd WHERE id = '$status'";
       if(mysqli_query($con,$sql_worker_delete))
       {
          echo'success';
       }
       else{
           echo 'erro';
       }

    }

?>


  

            </table>

            <br>
            <br>
          

            </div><!-- navigation-content -->

     </div> <!-- "manage-adds" -->







<!--      //////////////////////////////////////////////////SERVICE PROVIDER TAB//////////////////////////////////////////////////////////////// -->

    <div class="manage-providers">       

         <div class="navigation-name">
              <h1>Your Pending Adds</h1>
        </div>
        
            <br>
            <br>

            <table border= "1">
              <tr>
                <th style="width:289px">Add Title</th>
                <th style="width: 160px">Date & Time</th>
                <th style="width:70px">Admin Status</th>
                <th style="width:70px">Payemnt Status</th>               
                <th>Control</th>
              </tr>
            </table>


            <div class="navigation-content">


            <table border= "1">

              <?php
              include('config/connection.php');
            $sql1="SELECT * FROM postadd WHERE usermail = '".$_SESSION["email"]."' AND adminstatus = 'Pending'";
                $qry1=mysqli_query($con,$sql1);

                while($row1=mysqli_fetch_array($qry1))
                {
              
              ?>

              <tr>
                <td  style="width:289px"><?php echo $row1["servicename"]; ?> - (<?php echo $row1["category"]; ?>)</td>
                <td style="width: 160px"><?php echo $row1["date"]; ?></td>
                <td style="width:70px"><center><?php echo $row1["adminstatus"]; ?></center> 
                </td>
              
                
                
                
                
                
                <td style="width:70px"><?php echo $row1["paymentstatus"]; ?></td>
            
                <td>

                    <form action="" method="POST">                      
                          <button class="btn-view"><a href="single.php?id=<?php echo $row1["id"]; ?>">View</a><i class="far fa-eye"></i></button>

                          <button class="btn-view" style="background:#C1BF48;"><a href="updateadd.php?id=<?php echo $row1["id"];?>""> Update</a> <i class="fas fa-trash-alt"></i></button>

                          <button class="btn-delete">Remove <i class="fas fa-trash-alt"></i></button>                                             
                    </form>
                    
                </td>

              </tr>

              <?php
               }
               mysqli_close($con);
              ?>

            </table>
            



</div><!-- navigation-content -->


          

     </div> <!-- "manage-PROVIDERS" -->





<!-- 
     //////////////////////////////////////////////////SERVICE PROVIDER TAB////////////////////////////////////////////////////////////////
 -->

 
 <!--  ////////////////////////////////////////////Customer//////////////////////////////////////////////////////////////// -->

      <div class="manage-customers">       

<div class="navigation-name">
     <h1>Manage Customers</h1>
   </div>

   <br>
   <br>

   <table border= "1">
     <tr>
       <th style="width:249px">Service Name</th>
       <th style="width: 130px">Booking Date</th>
       <th style="width:215px">Booked By</th>
       <th style="width:80px">Email</th>
       <th>Control</th>
     </tr>
   </table>

   <div class="navigation-content">
       


   <table border= "1">
      
       <?php
       include('config/connection.php');
       $sql2="SELECT * FROM list l,register r WHERE l.customermail = r.email AND  l.providermail = '".@$_SESSION["email"]."'";
       $qry2=mysqli_query($con,$sql2);

       while($row2=mysqli_fetch_array($qry2))
       {
       ?>

     <tr>
       <td  style="width:249px"><?php echo $row2["servicename"];?>  </td>
       <td style="width: 130px"><center><?php echo $row2["date"];?></center></td>
       <td style="width:215px"><?php echo $row2["fname"];?> <?php echo $row2["lname"];?></td>
       <td style="width:80px"><center><i class="fas fa-at"></i><a href="mailto:<?php echo $row2["email"];?>" style="color:maroon;font-weight: bold;">Send</a></center></td>
    
       <td>

           <form action="#" method="POST">
               <button class="btn-view">View Profile<i class="far fa-eye"></i></button>
               <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>                    
           </form>                    
       </td>
     </tr>

               
       <?php
       }
       mysqli_close($con);
       ?>
   </table>

   </div><!-- navigation-content -->

</div> <!-- "manage-customers" -->
/////////////////////Customer//////////////////////////////////////////////////////////////// -->



    <div class="owner-messages">       

<div class="navigation-name">
     <h1>Addvertiesmet Feedback</h1>
   </div>

   <br>
   <br>

   <table border= "1">
     <tr>
       <th>Control</th>
     </tr>
   </table>

   <div class="navigation-content">
       


   <table border= "1">
      
       <?php
       include('config/connection.php');



      $sql3="SELECT  d.id as 'displayid', d.postid,d.checkby,p.paymentstatus as 'paymentstatus',p.id,p.adminstatus as 'adminstatus',p.servicename,p.category,p.usermail,p.status,p.date,s.fname as 'stafffname',
            s.lname as 'stafflname',s.email,s.status as 'staffpost',r.fname,r.lname
            FROM displayadd d,postadd p,staff s,register r WHERE p.usermail = '".@$_SESSION["email"]."'
             AND p.id = d.postid AND d.checkby = s.email  AND r.email = p.usermail
             AND p.paymentstatus='Accept' AND p.adminstatus = 'Accept' ORDER BY d.id ASC";


       $qry3=mysqli_query($con,$sql3);

       while($row3=mysqli_fetch_array($qry3))
       {
       ?>

     <tr>
      <td>

              <p class="notification">
                  Congratulations <?php echo $row3['fname'];?> <?php echo $row3['lname']; ?>. Your add "<?php echo $row3["servicename"]?>" was
                  Succesfully Published in Leisure DB belogns to the category of <?php echo $row3["category"] ?>.             
                  Thank you using Leisure DB.
                   
            </p>
            <button class="admin-accept"><a href="single.php?id=<?php echo $row3["displayid"]; ?>">Post add</a><!-- <a href="#dkalu">Accept</a> --></button>

      </td>
     </tr>

               
       <?php
       }
       mysqli_close($con);
       ?>
   </table>

   </div><!-- navigation-content -->

</div> <!-- "manage-customers" -->
 





