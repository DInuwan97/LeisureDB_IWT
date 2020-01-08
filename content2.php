   









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
                <td style="width:50px"><center>45%</center></td>
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




