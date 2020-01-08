<?php
    include('common/headeradmin.php');
?>

<?php
    include('separatecss/loginstyle.php');
?>

<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->

<!--Content  Start - Manesha-->

<head>
    <style>
     
    </style>
</head>

  <div class="content login">





  <!-- ----------------------------php begin for login----------------------------------------------- -->
 <?php

  if(isset($_POST["btnlogin"])){

    include('config/connection.php');

    $email = $_POST['email'];
    $pword = $_POST['pword'];


    //$sql="SELECT * FROM route WHERE username='{$uname}' AND password='{$pword}'";
    $sql = "SELECT * FROM register WHERE email = '{$email}' AND pword = '{$pword}'" ;
    $qry=mysqli_query($con,$sql);

    $sqlstaff = "SELECT * FROM staff WHERE email = '{$email}' AND pword = '{$pword}' AND confirmation = 'Accept'" ;
    $qrystaff=mysqli_query($con,$sqlstaff);
	

    if(	$result=mysqli_fetch_array($qry)){

      $_SESSION["email"]=$email;

      echo '

      <script>
      window.location = "index.php"
      </script>

      ';

    }elseif
    ($resultstaff=mysqli_fetch_array($qrystaff)){

      $_SESSION["emailstaff"]=$email;

      echo '

      <script>
      window.location = "index.php"
      </script>

      ';

    }





    else{
      echo'

      <div>
        Invalid Username or Password!
      </div>
      ';
    }
  
     }







?>

 <!-- ------------------------php end for login--------------------------------------------------------- -->





      <div class="imgcontainer">             
        <img src="./img/img_avatar.png" alt="Avatar" class="avatar">
      </div>
  
      <div class="container">

         <form action="" method="POST"> 
        <label for="uname"><b>Username</b></label>
        <input type="text" class="txt" placeholder="Your Email" id="username" name="email" required>  
        <label for="psw"><b>Password</b></label>
        <input type="password"  placeholder="Your Password" class="txt" id="psw" name="pword"  required>
        <button type="submit" name="btnlogin" class="btnsubmit">Login</button>
        </form>      
       
        <button type="submit" class="btnsubmit">Sign in</button>
       
        
      </div> 
 
    
  </div>
<!--Content  End - Manesha-->
<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->

<?php
    include('common/footeradmin.php');
?>