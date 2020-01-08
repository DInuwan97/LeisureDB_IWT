



<?php
    include('common/headeradmin.php');
?>


<?php
include('separatecss/feedbackstyle.php');

?><!-- main-navbar -->






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



<!-- slideshow images -->
<div id="image/beach"><img src="image/beach.jpg" alt="beach" width="100%" height="500px" class="slideshow"/>
<img src="image/image2.jpg" alt="beach" width="100%" height="500px" class="slideshow"/>
<img src="image/image3.jpg" alt="beach" width="100%" height="500px" class="slideshow"/>
<img src="image/image4.jpg" alt="beach" width="100%" height="500px" class="slideshow"/></div>

<div class="bgimg">


	<br><center><img src="image/feedback.jpg" class="feedback" style="box-shadow:12px 29px 81px 0px rgba(0,0,0,0.75)"/></center>
<!-- comment box -->


<p id="comment">

<?php
  $sql = "SELECT * FROM feedback";
  $res = mysqli_query($con,$sql);

  if(mysqli_num_rows($res)>1){
    while($row = mysqli_fetch_assoc($res)){
      echo $row['comment'];
      echo "<br/>";
    }
  }

?>



</p>

<form method="POST" action="#">

<input type="text" name="comment" id="words" placeholder="Add your review here...">
<center><input type="submit" value="Enter" name="btncomment" style="height:30px;width:200px;"></center>
<!-- <textarea id="words" rows="10" name="comment1" cols="20" placeholder="Add your review here..."></textarea><br><br>
<center><input type="button" name="submit" onclick="getwords()" value="Enter" style="height:30px;width:200px;"/></center> <br> -->

</form>

<?php
     include('config/connection.php');

 
  if (isset($_POST['btncomment'])) {
    $comment = $_POST["comment"];
      $sqlfeedback = "INSERT INTO feedback(comment) VALUES ('$comment')";


  if(mysqli_query($con,$sqlfeedback))
  {
    echo '
                      <meta http-equiv="refresh" content="0" />
                    ';
                
  }


  }
  

 // $result = mysqli_query($con, $sql);

 ?>




</div>

 <script type="text/javascript">
// function getwords() {
	
// 	text = words.value;
// 	document.getElementById("comment").innerHTML += '<p>'+text
// 	document.getElementById("words").value = " "
// }

var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slideshow");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 5000); // Change image every 2 seconds
	

}
</script>	
</div><br>
						  




<!-- ---footer----------------------------------------footer-----------------------------------------------footer--------------------------------footer----------------------------->
</br>
</br>


</body>
</html>
<?php
    include('common/footeradmin.php');
?>