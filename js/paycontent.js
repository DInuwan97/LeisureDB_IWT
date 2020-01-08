$(document).ready(function(){

	//loac the content
		$('method').load('paycontent.php .account');
		
	//checking the id of the link clicked
	    $('a').click(function(){
	   
	   	//removing active class
	     	$('a').removeClass('active');
	     	$(this).addClass('active');
					
				

		 	var clickedLink = $(this).attr('id');
			//alert(clickedLinik);

						$('method').load('paycontent.php .' + clickedLink);

	 });


});