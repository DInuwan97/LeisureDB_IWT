<?php
session_start();
?>

<div class="account">


<center>




  <?php
    include('config/connection.php');

    $sql="SELECT  d.id as 'activeaddid' ,d.postid,d.paymentstatus,p.id,p.servicename,p.description,p.image,p.usermail,p.cost,p.category,
    r.email,r.fname,r.lname,r.mobile,r.accountnum,b.accountnum,b.balance FROM displayadd d,postadd p,register r,bank b where d.paymentstatus = 'Pending' AND 
    p.id = d.postid AND p.usermail = r.email AND r.accountnum = b.accountnum AND  d.postid = '".@$_SESSION["postaddid"]."'" ;



   // $sql = "SELECT * FROM register WHERE id = $id"; 
    
    $qry=@mysqli_query($con,$sql);

    if($row=@mysqli_fetch_array($qry))
    {
      $addvetisingcost = 900;

    //$sqlbank = "SELECT pwd,balance FROM bank where accountnum = '.$row["accountnum"]'";
    //$qrybank=@mysqli_query($con,$sqlbank);
    //$rowbank=@mysqli_fetch_array($qrybank);
  ?>


   <table border="0" style="width:60%;">
      <tr>
        <td  style="width:140px; height: 40px;">Name</td>
        <center><td style="width:120px; text-align : center;  height: 40px;"><?php echo $row["fname"];?><?php echo $row["lname"];?></td></center>
      </tr>




      

      <tr>
        <td style="width:140px; height: 40px;">Account Number</td>
       <center><td style="width:120px; text-align : center; height: 40px;"><?php echo $row["accountnum"];?></td></center> 
      </tr>

      <tr>
        <td style="width:140px; height: 40px;">Total</td>
        <center><td style="width:120px; text-align : center; height: 40px;">Rs 900.00</td></center>
      </tr>

 
    </table>

    <?php
    }
    ?>

  <br>



  <form action="paymentgate.php" method="POST">
        <input type="hidden" name="balance" value="<?php echo $row["balance"]; ?>">
        <input type="hidden" name="paymentstatus" value="Accept">
        <input type="hidden" name="bankaccount" value="<?php echo $row["accountnum"];?>">
        <input type="hidden" name="newbalance" value="<?php echo $row["balance"] - $addvetisingcost ;?>">
        <button  style=" width:120px" name="btncheckout">Pay</button>
  </form>



  







  
</center>
   

</div><!-- account -->.

<div class="card">

     
  
  <center>
    <label style="font-size: 15px; font-weight: bold; float:left; margin-left: 230px;"><?php echo $row["fname"];?><?php echo $row["lname"];?></label>
    <br>
    <br>
  

    <label style="font-size: 15px; font-weight: bold; float:left; margin-left: 230px;">LKR 900.00</label>
      
    <br>
    <br>

    <label style="font-size: 15px; font-weight: bold; float:left; margin-left: 230px;">Accout Number</label>
    <br>


  <form action="" method="POST"> 
    <label style="font-size: 15px; font-weight: bold; float:left; margin-left: 230px;"><input type="text" placeholder="Enetr your account number" name="accountnum" style="border:none; border-radius:2px; width:180px; height: 30px;"></label>

    <br>
    <br>

     <label style="font-size: 15px; font-weight: bold; float:left; margin-left: 230px;"><input type="text" placeholder="PIN" name="pwd" style="border:none; border-radius:2px; width:180px; height: 30px;"></label>


              <br>





        <input type="hidden" name="balance" value="<?php echo $row["balance"]; ?>">
        <input type="hidden" name="paymentstatus" value="Accept">
        <input type="hidden" name="newbalance" value="<?php echo $row["balance"] - $addvetisingcost ;?>">
        <button  style=" width:120px" name="btnpaycard">Pay</button>
  </form>






   



</center>



</div><!-- card -->





