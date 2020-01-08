    <div class="manage-adds">       

            <div class="navigation-name">
              <h1>Manage Active Adds</h1>
            </div>
        
       

            <table class="main-tab" border= "1">
              <tr>
                <th style="width:249px">Add Title</th>
                <th style="width: 160px">Date & Time</th>
                <th style="width:70px">Preview</th>
                <th style="width:160px">Provider Name</th>               
                <th>Control</th>
              </tr>
            </table>

      <div class="navigation-content">
                
      <table border= "1">

        <?php
        include('config/connection.php');
              
        $sqlcheck = "SELECT * FROM postadd p,displayadd d,register r 
        WHERE d.postid = p.id AND p.usermail = r.email AND p.adminstatus = 'Accept'  ";
        
        $qrycheck=mysqli_query($con,$sqlcheck);

        
        $sqlstaff = "SELECT * FROM postadd p,displayadd d,staff s 
        WHERE d.postid = p.id AND p.usermail = s.email AND p.adminstatus = 'Accept' AND p.paymentstatus = 'Accept' ";
      
        $qrystaff=mysqli_query($con,$sqlstaff);
        ?>

                <?php
                while($rowstaff=mysqli_fetch_array($qrystaff))
                {
                ?>

              <tr>
                <td  style="width:249px"><?php echo $rowstaff["servicename"]; ?></td>
                <td style="width: 160px"><?php echo $rowstaff["date"]; ?></td>
                <td style="width:70px"><center><?php echo $rowstaff["adminstatus"]; ?></center></td>               
                <td style="width:160px"><?php echo $rowstaff["fname"]; ?> <?php echo $rowstaff["lname"];?>(<?php echo $rowstaff["status"]; ?>)</td>
                
                <td>

                    <form action="" method="POST">                   	  
                          <button class="btn-view"><a href="#" style="font-weight:bold;">View</a><i class="far fa-eye"></i></button>
                          <button class="btn-delete">Remove <i class="fas fa-trash-alt"></i></button>                                             
                    </form>
                    
                </td>

              </tr>

              <?php
                }                              
              ?>

                              <?php
                while($rowcheck=mysqli_fetch_array($qrycheck))
                {
                ?>

              <tr>
                <td  style="width:249px"><?php echo $rowcheck["servicename"]; ?></td>
                <td style="width: 160px"><?php echo $rowcheck["date"]; ?></td>
                <td style="width:70px"><center><?php echo $rowcheck["adminstatus"]; ?></center></td>               
                <td style="width:160px"><?php echo $rowcheck["fname"]; ?><?php echo$rowcheck["lname"]; ?></td>
                
                <td>

                    <form action="" method="POST">                   	  
                          <button class="btn-view"><a href="#" style="font-weight:bold;">View</a><i class="far fa-eye"></i></button>
                          <button class="btn-delete">Remove <i class="fas fa-trash-alt"></i></button>                                             
                    </form>
                    
                </td>

              </tr>

              <?php
                }               
                
              ?>
  

            </table>

            </div><!-- navigation-content -->

     </div> <!-- "manage-adds" -->





     <!-- ----------------other adds----------------------------------------------------------------------------------- -->

     <div class="other-adds">       

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

</div> <!-- "other-adds" -->







<!--      //////////////////////////////////////////////////SERVICE PROVIDER TAB//////////////////////////////////////////////////////////////// -->

    <div class="manage-providers">       

         <div class="navigation-name">
              <h1>Manage Service Providers</h1>
        </div>

            <table border= "1">
              <tr>
                <th style="width:249px">Provider</th>
                <th style="width: 140px">Date of Joined</th>
                <th style="width:95px">Contact Number</th>
                <th style="width:150px">Email</th>
                <th style="width:50px">Rate</th>
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
                <td style="width:50px"><center></center></td>
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


          

     </div> <!-- "manage-PROVIDERS" -->





<!-- 
     //////////////////////////////////////////////////SERVICE PROVIDER TAB////////////////////////////////////////////////////////////////
 -->

 
 <!--  ////////////////////////////////////////////Customer//////////////////////////////////////////////////////////////// -->

<div class="manage-customers">       

<div class="navigation-name">
     <h1>Manage Customers</h1>
   </div>



   <table border= "1">
     <tr>
       <th style="width:249px">Customer's Name</th>
       <th style="width: 140px">Date of Joined</th>
       <th style="width:95px">Contact Number</th>
       <th style="width:150px">Email</th>
       <th style="width:50px">Rate</th>
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
       <td style="width: 140px">17:54 11/02/2017</td>
       <td style="width:95px"><?php echo $row2["mobile"];?></td>
       <td style="width:150px"><center><i class="fas fa-at"></i><a href="mailto:<?php echo $row2["email"];?>" style="color:maroon;font-weight: bold;"> Click here to Send</a></center></td>
       <td style="width:50px"><center></center></td>
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






<!--  ////////////////////////////////////////////Customer//////////////////////////////////////////////////////////////// -->
 

 <div class="manage-staff">       

<div class="navigation-name">
     <h1>Manage Staff</h1>
   </div>

   <br>
   <br>

   <table border= "1">
     <tr>
       <th style="width:249px">Customer's Name</th>
       <th style="width: 140px">Date of Joined</th>
       <th style="width:95px">Contact Number</th>
       <th style="width:150px">Email</th>
       <th style="width:50px">Rate</th>
       <th>Control</th>
     </tr>
   </table>

   <div class="navigation-content">
       


   <table border= "1">
      
       <?php
       include('config/connection.php');
       $sql3="SELECT * FROM staff";
       $qry3=mysqli_query($con,$sql3);

       while($row3=mysqli_fetch_array($qry3))
       {
       ?>

     <tr>
       <td  style="width:249px"><?php echo $row3["fname"];?> <?php echo $row3["lname"];?> (<?php echo $row3["status"]; ?>) </td>
       <td style="width: 140px">17:54 11/02/2017</td>
       <td style="width:95px"><?php echo $row3["mobile"];?></td>
       <td style="width:150px"><center><i class="fas fa-at"></i><a href="mailto:<?php echo $row3["email"];?>" style="color:maroon;font-weight: bold;"> Click here to Send</a></center></td>
       <td style="width:50px"><center><?php echo $row3["confirmation"]; ?></center></td>
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





