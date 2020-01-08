   <?php
    session_start();
   ?>

    <div class="manage-adds">       

            <div class="navigation-name">
              <h1>Manage Advertiesments</h1> 


<form method="POST">
  

               <button name="create_pdf" style="margin-bottom:5px;margin-top: 10px; float:right; margin-right: 25px; height: 30px; color:white;cursor:pointer;border: none; border-radius: 5px; font-weight: bold; background: #E35C2A  ;">Create PDF</button>
</form>

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
                   <?php  
                     echo fetch_data();  
                  ?>
            </table>

      <div class="navigation-content">
                


                <?php

                function fetch_data()  
                {
                 
                 $output = ''; 
                
                 $connect = mysqli_connect("localhost", "root", "", "leisure"); 
                $sql="SELECT * FROM postadd p,displayadd d WHERE p.id = d.postid AND p.usermail = '".$_SESSION["email"]."'";
                $qry=mysqli_query($connect,$sql);
                while($row=mysqli_fetch_array($qry))
                {
                

              $output .= ' <tr>
                <td  style="width:289px">'.$row["servicename"].'</td>
                <td style="width: 160px">'.$row["date"].'</td>
                <td style="width:70px"><center>'.$row["adminstatus"].'</center></td>                
                <td style="width:70px">'.$row["paymentstatus"].'</td>

                 <td>

                    <form action="" method="POST">                      
                          <button class="btn-view"><a href="single.php?id='.$row["id"].'>View</a><i class="far fa-eye"></i></button>

                          <button class="btn-view" style="background:#C1BF48;"><a href="updateadd.php?id='.$row["id"].'> Update</a> <i class="fas fa-trash-alt"></i></button>

                          <button class="btn-delete">Remove <i class="fas fa-trash-alt"></i></button>                                             
                    </form>
                    
                </td>



                </tr>';
              
                } 
                      return $output;  
            }   



if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th style="width:289px">Add Title</th>
                <th style="width: 160px">Date & Time</th>
                <th style="width:70px">Admin Status</th>
                <th style="width:70px">Payemnt Status</th>
                
                <th>Control</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML( $connect);  
      $obj_pdf->Output('sample.pdf', 'I');  
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

 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="30%">Name</th>  
                <th width="10%">Gender</th>  
                <th width="45%">Designation</th>  
                <th width="10%">Age</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?> 






<!--  ////////////////////////////////////////////Customer//////////////////////////////////////////////////////////////// -->
 





