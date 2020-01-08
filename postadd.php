<?php
$directory_self=str_replace(basename($_SERVER['PHP_SELF']),
'',$_SERVER['PHP_SELF']);

$uploadHandler='http://'.$_SERVER['HTTP_HOST'].

$directory_self.'upload.processor.php';

$max_file_size=3000000;

?>


<?php
    include('common/headeradmin.php');
?>

<?php
    include('separatecss/postaddstyle.php');
?>

<?php

  include('config/connection.php');

  if(!(@$_SESSION["email"] == NULL) && (@$_SESSION["emailstaff"] == NULL))
  {   

    $sql = "SELECT email,status FROM register WHERE email = '".@$_SESSION["email"]."'";
    $qry=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($qry);

  }
  elseif(!(@$_SESSION["emailstaff"] == NULL) && (@$_SESSION["email"] == NULL))  
  {
    $sql = "SELECT email,status FROM staff WHERE email = '".@$_SESSION["emailstaff"]."'";
    $qry=mysqli_query($con,$sql);      
    $row = mysqli_fetch_array($qry);




  }

?>



<!-- ---------------------header------------------header--------------------header--------------------header---------------------header--------- -->

 <!--Content  Start - Manesha-->
  <div class="content">
    <h1>Post Your Advertisements</h1>
    <form action="<?php echo $uploadHandler;?>" enctype="multipart/form-data" method="POST">
      <div>
        <section class="container">
          <div class="leftContainer">
            <div class="row">
              <div class="col-25">
                <label>Service Type</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="servicename" placeholder="service type">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label>Service Description</label>
              </div>
              <div class="col-75">
                <textarea id="subject" name="description" placeholder="description.." style="height:200px"></textarea>
              </div>
            </div>           
            <div class="row">
              <div class="col-25">
                <label>Service Category</label>
              </div>
              <div class="col-75">
                <select id="service" name="category">
                  <option value="Hikking">Hikking</option>
                  <option value="Swimming">Swimming</option>
                  <option value="Camping">Camping</option>
                   <option value="Tourism">Tourism</option>
                    <option value="Sports">Sports</option>
                     <option value="Rasting">Rasting</option>
                </select>
              </div>
            </div>    
            <div class="row">
              <div class="col-25">
                <label>Cost Per Person</label>
              </div>
              <div class="col-75">
                <input type="text" id="cost" name="cost" placeholder="Cost per Person">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label>Upload Image</label>
              </div>
              <div class="col-75">
                  <br>
              <input type="file" name="file">
              </div>
            </div>
     



            <input type="hidden" name="usermail" value="<?php echo $row["email"]?>">
            <input type="hidden" name="adminstatus" value="Pending">
            <input type="hidden" name="paymentstatus" value="Pending">
            <input type="hidden" name="poststatus" value="<?php echo $row["status"]?>">


    
            <div class="row">
              <input type="submit" name="btnsubmit" onclick="requestFunction()" value="Request from Admin">
            </div>



          </div>

 

        </section>
      </div>
    </form> 
    
  </div>
  <div></div>
  </div>

                <br><br><br><br><br><br><br><br><br></br>

  <!--Content  End - Manesha-->

<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->
<?php
    include('common/footeradmin.php');
?>