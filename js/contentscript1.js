$(document).ready(function(){

	//loac the content
		$('main1').load('content1.php .manage-adds');
		
	//checking the id of the link clicked
	    $('a').click(function(){
	   
	   	//removing active class
	     	$('a').removeClass('active');
	     	$(this).addClass('active');
					
				

		 	var clickedLink = $(this).attr('id');
			//alert(clickedLinik);

						$('main1').load('content1.php .' + clickedLink);

	 });


});