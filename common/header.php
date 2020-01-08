<!DOCTYPE html>
<html>
<head>
<title>Leisure | DB</title>

<link rel="icon" type="text/css" href="img/logo.png">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/customer_profile.css">
<link rel="stylesheet" type="text/css" href="css/Register.css">
<link rel="stylesheet" type="text/css" href="css/login.css">





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

 <script src="js/contentscript.js"></script> 


<style>


</style>

</head>
<body>


<div class="wrapper">
  





<div class="topnav" id="myTopnav">

   <a href="#home" class="active">Welcome</a>


   <a href="login.html" class="sign-in"><i class="fas fa-sign-in-alt"></i> Sign In  </a>

   <a href="register.html" class="sign-up"><i class="fas fa-edit"></i> Create an Account</a>

     
            <div class="dropdown">

              <button class="dropbtn"><i class="fas fa-user"></i> Hello Guest <i class="fa fa-caret-down"></i></button>
               
              <div class="dropdown-content">
                <a href="profile.html">My Profile</a>
                <a href="#2">Account Settings</a>
                <a href="#3">Log out</a>
              </div>
            </div><!-- dropdown -->
           
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
            <br><a href="#"><i class="fab fa-opencart fa-3x"></i></i></a>   
            </div><!-- cart -->

              </div><!-- head-name -->


<!-- ..................................................................... -->

            </div><!-- header -->


              <div class="main-navbar" id="main-navbar">
                

                  <a href="#home" class="active"><i class="fas fa-home fa-2x"></i> </a>

     


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
                              <a href="job_opportunities.html">Web Administrator</a>
                              <a href="job_opportunities.html">Online Finance Controller</a>
                              <a href="job_opportunities.html">System Designer</a>
                          </div>
                  </div>    

                  <a href="#foot-wear" class="foot-wear">FAQ'S</a>
                  <a href="aboutus.html" class="wedding">ABOUT US</a>
                  <a href="contactus.html" class="wedding">CONTACT US</a>


                   <div class="search-icon">
                    <i class="fas fa-search fa-2x"></i> 
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



<!-- </div>wrapper -->




</body>
</html>