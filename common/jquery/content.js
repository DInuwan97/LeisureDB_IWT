$(document).ready(function(){

	//loac the content
		$('main').load('content.php');
		
	/*/checking the id of the link clicked
	    $('a').click(function(){
	    	

	    	//removing active class
	    	$('a').removeClass('active');
	    	$(this).addClass('active');
					
				

			var clickedLink = $(this).attr('id');
			//alert(clickedLinik);

						$('main').load('content.html #' + clickedLink);

		});*/


});