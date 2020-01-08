<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/customer_profile.css">
<link rel="stylesheet" type="text/css" href="css/single.css">
<!-- <link rel="stylesheet" type="text/css" href="css/reg.css"> -->




<link rel="stylesheet" type="text/css" href="css/footer.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<script src="js/register.js"></script>


<style>


</style>

</head>
<body>


<div class="topnav" id="myTopnav">

   <a href="index.php" class="active" >Welcome</a>


   <a href="login.php" class="sign-in"><i class="fas fa-sign-in-alt"></i> Sign In  </a>

   <a href="register.php" class="sign-up"><i class="fas fa-edit"></i> Create an Account</a>







      
      <?php

//connect to the DB and define quries and other variables

include('config/connection.php');


$sql = "SELECT * FROM register WHERE email = '".@$_SESSION["email"]."'";
$qry=mysqli_query($con,$sql);
$row = mysqli_fetch_array($qry);

$sqlstaff = "SELECT * FROM staff WHERE email = '".@$_SESSION["emailstaff"]."'";
$qrystaff=mysqli_query($con,$sqlstaff);      
$rowstaff = mysqli_fetch_array($qrystaff);

        

if(!(@$_SESSION["email"] == NULL) && (@$_SESSION["emailstaff"] == NULL))
{

$sessionhide = $_SESSION["email"];

echo '              
<form action="" method="POST"></form>
  <input type="hidden" name="sessionhide" value='.$_SESSION["email"].'>
  <input type="hidden" name="" value='.@$_SESSION["postaddid"].'>
</form>
';


}elseif(!(@$_SESSION["emailstaff"] == NULL) && (@$_SESSION["email"] == NULL))
{

$sessionhide = $_SESSION["emailstaff"];


echo '              
<form action="" method="POST"></form>
  <input type="hidden" name="sessionhide" value= '.$_SESSION["emailstaff"].'>
  <input type="hidden" name="" value='.@$_SESSION["postaddid"].'>

</form>
';


}


// if(!(@$_SESSION["postaddid"] == NULL)
// {
//   echo'
//       <input type="text" name="" value='.$_SESSION["postaddid"].'>
//   ';
// }

?>

  <?php
      include('config/connection.php');
      
      $sql="SELECT fname,lname,status FROM register WHERE email ='".@$_SESSION["email"]."' ";
      $qry=mysqli_query($con,$sql);
      //$row=mysqli_fetch_array($qry);

      $sqlstaff="SELECT fname,lname,status FROM staff WHERE email ='".@$_SESSION["emailstaff"]."' ";
      $qrystaff=mysqli_query($con,$sqlstaff);
      //$rowstaff=mysqli_fetch_array($qrystaff);

  
      if((@$_SESSION["email"] == NULL) && (@$_SESSION["emailstaff"] == NULL))
      {

        echo '          
      <div class="dropdown">
        <button class="dropbtn"><i class="fas fa-user"></i> Hello Guest</button>         
      </div><!-- dropdown -->              
        ';


       } elseif(!(@$_SESSION["email"] == NULL) && (@$_SESSION["emailstaff"] == NULL && $row["status"] == 'Service Provider')) 
       {
        $row = mysqli_fetch_array($qry);
        //$rowstaff = mysqli_fetch_array($qrystaff);

          echo '
          <div class="dropdown">
    
            <button class="dropbtn"><i class="fas fa-user"></i> '.$row["fname"].' '.$row["lname"].' <i class="fa fa-caret-down"></i></button>
    
            <div class="dropdown-content">
              <a href="provider.php">My Profile</a>
              <a href="#2">Account Settings</a>
              <a href="logout.php">Log out</a>
            </div>
          </div><!-- dropdown -->
            ';    
        


      }

       elseif(!(@$_SESSION["email"] == NULL) && (@$_SESSION["emailstaff"] == NULL && $row["status"] == 'Customer')) 
       {
        $row = mysqli_fetch_array($qry);
        //$rowstaff = mysqli_fetch_array($qrystaff);

          echo '
          <div class="dropdown">
    
            <button class="dropbtn"><i class="fas fa-user"></i> '.$row["fname"].' '.$row["lname"].' <i class="fa fa-caret-down"></i></button>
    
            <div class="dropdown-content">
              <a href="customer.php">My Profile</a>
              <a href="#2">Account Settings</a>
              <a href="logout.php">Log out</a>
            </div>
          </div><!-- dropdown -->
            ';    
        


      }


      elseif(!(@$_SESSION["emailstaff"] == NULL) && (@$_SESSION["email"] == NULL) && $rowstaff["status"] == 'Admin'){
       
        $rowstaff = mysqli_fetch_array($qrystaff);
        //$rowstaff = mysqli_fetch_array($qrystaff);


        
          echo '
          <div class="dropdown">
    
            <button class="dropbtn"><i class="fas fa-user"></i> '.$rowstaff["fname"].' '.$rowstaff["lname"].' <i class="fa fa-caret-down"></i></button>
    
            <div class="dropdown-content">
              <a href="admin.php">My Profile</a>
              <a href="#2">Account Settings</a>
              <a href="logout.php">Log out</a>
            </div>
          </div><!-- dropdown -->
            ';    
      



      }
      elseif(!(@$_SESSION["emailstaff"] == NULL) && (@$_SESSION["email"] == NULL) && $rowstaff["status"] == 'Owner'){
       
        $rowstaff = mysqli_fetch_array($qrystaff);
        //$rowstaff = mysqli_fetch_array($qrystaff);


        
          echo '
          <div class="dropdown">
    
            <button class="dropbtn"><i class="fas fa-user"></i> '.$rowstaff["fname"].' '.$rowstaff["lname"].' <i class="fa fa-caret-down"></i></button>
    
            <div class="dropdown-content">
              <a href="owner.php">My Profile</a>
              <a href="#2">Account Settings</a>
              <a href="logout.php">Log out</a>
            </div>
          </div><!-- dropdown -->
            ';    
      



      }
     
      


    ?>

     
           
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction1()">&#9776;</a>
</div><!-- topnav -->


     

            
            <div class="header"> 


              <div class="head-name">
                            
                    <div class="logo-name">
                      
             <!--              <a href="#wear"> LEISURE </a> -->
              <img src="img/logo.png" style="width:340px; height: 150px; float: left; margin-left: none;">
              <hr>

                                            
                    </div><!-- logo-name -->



                    <div class="logo-sub-name">
                      <ul>
                        <li>
                   <!--        <a href="#wear"><h2>STORES</h2></a> -->
                        </li>
                      </ul>
                    </div>


              <div class="cart">
                <p>My Cart</p>
            <br><a href="mycart.php"><i class="fab fa-opencart fa-3x"></i></a>   
            </div><!-- cart -->

              </div><!-- head-name -->


<!-- ..................................................................... -->

            </div><!-- header -->


              <div class="main-navbar" id="main-navbar">
                

                  <a href="index.php" class="active"><i class="fas fa-home fa-2x"></i> </a>

     
    


                  <div class="main-navbar-dropdown">

                  <button class="main-navbar-dropbtn">ACTIVITIES<i class="fa fa-caret-down"></i></button>
               
                          <div class="main-navbar-dropdown-content">
                              <a href="leisure_Activities.html">Hiking</a>
                              <a href="leisure_Activities.html">Tourism</a>
                              <a href="leisure_Activities.html">Camping</a>
                              <a href="leisure_Activities.html">Swimming</a>
                              <a href="leisure_Activities.html">Sports</a>
                          </div>
                  </div>




             
                  <div class="main-navbar-dropdown">

                  <button class="main-navbar-dropbtn">OPPORTUNITIES<i class="fa fa-caret-down"></i></button>
               
                          <div class="main-navbar-dropdown-content" id="opportunities">
                              <a href="staff.php">Web Administrator</a>
                              <a href="staff.php">Online Finance Controller</a>
                              <a href="staff.php">System Designer</a>
                          </div>
                  </div>    

                  <a href="#foot-wear" class="foot-wear">FAQ'S</a>
                  <a href="aboutus.html" class="wedding">ABOUT US</a>
                  <a href="contactus.php" class="wedding">CONTACT US</a>


                   <div class="search-icon">
                    <button style="background: none; border:none; cursor: pointer;"><i class="fas fa-search fa-2x"></i> </button>
                    
                </div><!-- search-icon-->
                 


                <div class="top-bar-search">
                  <form method="POST" action="index1.html">
                    <input type="text" name="search_box" placeholder=" Search...">         
                  </form>
                </div><!-- top-bar-search -->

               

                  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction2()">&#9776;</a>



    </div> <!-- main-navbar -->








<script>
function myFunction1() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>


<script>
function myFunction2() {
    var y = document.getElementById("main-navbar");
    if (y.className === "main-navbar") {
        y.className += " responsive";
    } else {
        y.className = "main-navbar";
    }
}
</script>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("myTopnav").style.top = "0";
  } else {
    document.getElementById("myTopnav").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>





<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->



<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->

    	





</body>
</html>