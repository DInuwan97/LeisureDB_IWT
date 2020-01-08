<div class="manage-adds">       

            <div class="navigation-name">
              <h1>Manage Advertiesments</h1>
            </div>
        
            <br>
            <br>

            <table class="main-tab" border= "1">
              <tr>
                <th style="width:289px">Add Title</th>
                <th style="width: 160px">Date & Time</th>
                <th style="width:70px">Admin Status</th>
                <th style="width:70px">Payemnt Status</th>
                <th style="width:50px"></th>
                <th>Control</th>
              </tr>
            </table>

      <div class="navigation-content">
                
            <table border= "1">

                <?php
                include('config/connection.php');
                $sql="SELECT * FROM postadd";
                $qry=mysqli_query($con,$sql);

                while($row=mysqli_fetch_array($qry))
                {
                ?>

              <tr>
                <td  style="width:289px"><?php echo $row["servicename"]; ?></td>
                <td style="width: 160px"><?php echo $row["date"]; ?></td>
                <td style="width:70px"><center><?php echo $row["adminstatus"]; ?></center> 
                  
                <?php

                 /* if($row["adminstatus"] == 'Accept')
                  {
                    echo '
                    <i class="fas fa-check-square" id="published"></i>
                    ';               
                  }
                  elseif(($row["adminstatus"] == 'Pending')
                  {
                    echo'
                    <i class="fas fa-spinner" id="not-published"></i>
                    ';
                  }
                  else{
                    
                  }*/
            
                ?>
                </td>
                
                
                
                
                
                <td style="width:70px"><?php echo $row["paymentstatus"]; ?></td>
                <td style="width:50px"><center><i class="fas fa-times-circle" id="not-published"></i></center></td>
                <td>

                    <form action="" method="POST">                   	  
                          <button class="btn-view">View <i class="far fa-eye"></i></button>
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

     </div> <!-- "manage-adds" -->








<!--      //////////////////////////////////////////////////SERVICE PROVIDER TAB//////////////////////////////////////////////////////////////// -->

   
   <div class="manage-providers">       

<div class="navigation-name">
     <h1>Manage Service Providers</h1>
</div>

   <br>
   <br>

   <table border= "1">
     <tr>
       <th style="width:249px">Provider</th>
       <th style="width: 140px">Date of Joined</th>
       <th style="width:95px">Contact Number</th>
       <th style="width:150px">Email</th>

       <th>Control</th>
     </tr>
   </table>


   <div class="navigation-content">


   <table border= "1">

     <?php
     include('config/connection.php');
     $sql1="SELECT * FROM register WHERE status = 'Service Provider'";
     $qry1=mysqli_query($con,$sql1);

     while($row1=mysqli_fetch_array($qry1))
     {
     ?>

     <tr>
       <td  style="width:249px"><?php echo $row1["fname"]; ?> <?php echo $row1["lname"]; ?></td>
       <td style="width: 140px">17:54 11/02/2017</td>
       <td style="width:95px"><?php echo $row1["mobile"]; ?></td>
       <td style="width:150px"><center><i class="fas fa-at"></i><a href="mailto:<?php echo $row1["email"]; ?>" style="color:maroon;font-weight: bold;"> Click here to Send</a></center></td>
       
       <td>

           <form action="#" method="POST">
               <button class="btn-view">View Profile<i class="far fa-eye"></i></button>
               <button class="btn-delete">Delete<i class="fas fa-trash-alt"></i></button>                    
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
       <th style="width:249px">Customer's Name</th>
       <th style="width: 140px">Date of Joined</th>
       <th style="width:95px">Contact Number</th>
       <th style="width:150px">Email</th>

       <th>Control</th>
     </tr>
   </table>

   <div class="navigation-content">
       


   <table border= "1">
      
       <?php
       include('config/connection.php');
       $sql2="SELECT * FROM register WHERE status = 'Customer'";
       $qry2=mysqli_query($con,$sql2);

       while($row2=mysqli_fetch_array($qry2))
       {
       ?>

     <tr>
       <td  style="width:249px"><?php echo $row2["fname"];?> <?php echo $row2["lname"];?> </td>
       <td style="width: 140px">17:54 11/02/2018</td>
       <td style="width:95px"><?php echo $row2["mobile"];?></td>
       <td style="width:150px"><center><i class="fas fa-at"></i><a href="mailto:<?php echo $row2["email"];?>" style="color:maroon;font-weight: bold;"> Click here to Send</a></center></td>

       <td>

           <form action="#" method="POST">
               <button class="btn-view">View Profile<i class="far fa-eye"></i></button>
               <button class="btn-delete">Delete<i class="fas fa-trash-alt"></i></button>                    
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




<!--  ////////////////////////////////////////////Customer//////////////////////////////////////////////////////////////// -->
