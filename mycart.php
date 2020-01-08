<?php
    include('common/headeradmin.php');
?>

<?php
if(@$_SESSION["email"] == NULL){
  
   echo '
            <script>
                 window.location = "login.php"
                 document.write("You should login as an Admin to access this page");
            </script>

           

           ';


  
}

 
?>



<div class="shopping-cart" style="background:gray; width:100%; height:100px;">
<br>
       <center><h1>Shopping Cart</h1></center>
</div>


<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<?php
    include('config/connection.php');

    $sql = "SELECT  c.cartid,c.displayid,c.postid,c.servicename,c.providermail,c.date,c.person,c.unitprice,c.total,c.customermail
    ,r.fname,r.lname,r.email FROM mycart c,register r WHERE c.customermail='".@$_SESSION["email"]."' AND c.providermail = r.email ";
    $qry = mysqli_query($con,$sql);
?>

 <div class="main-content" style=" width:100%;   background: #0F90A5;">
 
        
<br>

<div class="table clearfix" style="width:60%; height:100%;  margin-left:145px;  display:inline-block;">




    <table class="table table-striped"  style="width:100%; border-radius:3px; font-weight:bold;">

    <tbody>

    <?php
    $total = 0;
    while($row=mysqli_fetch_array($qry))
    {
  
    ?>

      <tr>
        <td><?php echo $row["servicename"]; ?></td>


        <form action="" method="POST">          
            <td><input type="date" name="wanteddate" style="width:160px;" value="<?php echo $row["date"];?>"></td>
            <td><input type="number" name="persons" class="form-control" style="width:50px; height:25px;" value="<?php echo $row["person"]; ?>"></td>
            <td>Rs:<?php echo $row["unitprice"]; ?></td>
            <td>Rs:<?php echo $row["total"]; ?></td>

        <td>
        <button  name="btnupdate" class="btn btn-warning" ><i class="far fa-edit"></i></button>
        <button  name="btndelete" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        <input type="hidden" name="cartid" value="<?php echo $row["cartid"]; ?>">
        <input type="hidden" name="unitprice" value=<?php echo $row["unitprice"]; ?>>
        
        </form>

        </td>
      </tr>
      
    <?php
         $total = $total + $row["total"];
    }
    ?>

            <?php
            if(isset($_POST["btnupdate"]))
            {
                $sqlupdate = "UPDATE mycart SET date='".$_POST["wanteddate"]."',person = '".$_POST["persons"]."'
                ,total = '".$_POST["unitprice"] * $_POST["persons"]."'  WHERE cartid = '".$_POST["cartid"]."' ";
                if(mysqli_query($con,$sqlupdate))
                  {

                    echo '
                      <meta http-equiv="refresh" content="0" />
                    ';
                
                
                
                  }


                 

               $sqlupdatelist = "UPDATE list SET date='".$_POST["wanteddate"]."',person = '".$_POST["persons"]."'
               ,total = '".$_POST["unitprice"] * $_POST["persons"]."'  WHERE cartid = '".$_POST["cartid"]."' ";
               if(mysqli_query($con,$sqlupdatelist))
                {
  
                 
                 }
              
            }

            if(isset($_POST["btndelete"]))
            {
                $sqldelete = "DELETE * FROM  list,mycart WHERE list.cartid = '".$_POST["cartid"]."' AND mycart.cartid = '".$_POST["cartid"]."'";
                if(mysqli_query($con,$sqldelete))
                {
                    echo'Deleteed
                    <meta http-equiv="refresh" content="0" />
                    ';
                }
            }








        ?>

    
    </tbody>
    
  </table>  



    </div> <!--table -->



    <div class="checkout clearfix" style="width:15%; height:250px; border-radius:5px; margin-left:65px;  display:inline-block;">
            <h4>Total : </h4>
            
            <h1 style="color:#C78C26; margin-top:none;">Rs <?php print("$total"); ?></h1>
            

    <form action="" method="POST">
               

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fab fa-cc-visa"></i></span>
                </div>
                <input type="text" name="accountnum" class="form-control" aria-label="Amount (to the nearest dollar)">
         
        </div>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="text" name="pwd" class="form-control" aria-label="Amount (to the nearest dollar)">
             
        </div>
        
                <button class="btn btn-dark btn-lg" name="btncheckout" style="width:220px;"><center>Checkout</center></button>
   
            

            <?php
                include('config/connection.php');

                     
                $sqllist = "SELECT payid FROM payment ORDER BY payid DESC LIMIT 1";
                $qrylist = mysqli_query($con,$sqllist);

               if($rowlist = mysqli_fetch_array( $qrylist))
               {
               // $new_payment_id = $rowlist + 1;

                //print("pay id id $new_payment_id");
            ?>
              
                                <input type="text" name="paymentid" value="<?php echo $rowlist["payid"] + 1;?>">                                         
                      </form>

            <?php
               }





                if(isset($_POST["btncheckout"]))
                {
                    $accountnum = $_POST["accountnum"];
                    $pwd = $_POST["pwd"];
                    //$cartid = $_POST["cartid"];

                    $sqlbank = "SELECT * FROM bank WHERE accountnum = '{$accountnum}' AND pwd = '{$pwd}'";
                    $qrybank = mysqli_query($con,$sqlbank);

                    if($rowbank = mysqli_fetch_array($qrybank))
                    {
                        if($rowbank["balance"] >= $total)
                        {
                   



                            $newbalance = $rowbank["balance"] - $total;
                            $sqlcheckout_update = "UPDATE bank  SET balance = $newbalance WHERE id = 1";
                            if(mysqli_query($con,$sqlcheckout_update))
                            {
                                    echo 'Payment success';
                             
                            }

                            $sql_check_ordered_list = "SELECT * FROM list WHERE customermail = '".@$_SESSION["email"]."'";
                            $qry_check_ordered_list = mysqli_query($con, $sql_check_ordered_list);




                            

                            while( $row_check_ordered_list = mysqli_fetch_array( $qry_check_ordered_list))
                            {
                                $sql_update_ordered_list = "UPDATE list SET checkout = 'PAID', paymentid='".$_POST["paymentid"]."' WHERE customermail = '".@$_SESSION["email"]."' AND checkout = 'Pending'";
                                if(mysqli_query($con,$sql_update_ordered_list))
                                {
                                       
                                 
                                }

                            }

                            $sqlpayment = "INSERT INTO payment(purchasemail,paytotal)VALUES('".$_SESSION["email"]."','$total')";

                            if(mysqli_query($con,$sqlpayment))
                            {
            
                                    $sql_pay_id = "SELECT payid,paytotal FROM payment WHERE purchasemail ='".@$_SESSION["email"]."' AND paytotal = $total";
                                    $qry_pay_id = mysqli_query($con,$sql_pay_id);
            
                                    if($row_pay_id = mysqli_fetch_array($qry_pay_id))
                                    {
                                    ?>
                                        <form action="" method="POST">
                                            <input type="hidden" name="payid" value="<?php echo $row_pay_id["payid"];?>">
                                            <input type="hidden" name="tot" value="<?php echo $row_pay_id["paytotal"];?>">
                                        </form>
                                      
                                    <?php
                                    }

                               
                                        //include('config/connection.php');

                                   

                                     



                                    $sqldelete="DELETE FROM mycart WHERE customermail = '".@$_SESSION["email"]."'";
	       

                                    if(mysqli_query($con,$sqldelete))
                                    {
                                    	
                                    	        echo '
                      <meta http-equiv="refresh" content="0" />
                    ';	

                    			echo'Succesfully purchased!!';

                  					 }
                                    else{
                                        echo'unsuccess';
                                    }


            
            
                       
                                echo 'success';
                            }
                            else{
                                echo'error';
                            }







                           

                        }
                        else{
                                echo 'Not enough balance';
                        }
                    }
                    else{
                        echo 'Invalid Account Number or Password';
                    }
                    
                    


                    


            
            }
            

            ?>


            



    </div> <!--checkout -->

    

 </div>   <!-- main-content -->







    


<?php
    include('separatecss/mycartstyle.php');
?>

<?php
    include('common/footeradmin.php');
?>