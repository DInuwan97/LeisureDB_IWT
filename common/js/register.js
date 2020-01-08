function Validation(){
	var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var email = document.getElementById('email').value;
	var contactNumber = document.getElementById('contactNumber').value;
	var psswrd = document.getElementById('psswrd').value;
	var con_psswrd = document.getElementById('con_psswrd').value;
	
	
	if(fname == ""){
		document.getElementById('fnameid').innerHTML = "*Please fill first name field";                                                                                      
		return false;
	}
	if(( fname.length < 5) || (fname.length > 20)){
		document.getElementById('fnameid').innerHTML = "*Please fill first name between 5 and 20";                                                                                      
		return false;
	}
	if(!isNaN(fname)){
		document.getElementById('fnameid').innerHTML = "*Please fill enter character";                                                                                      
		return false;
	}
	
		

	if(lname == ""){
		document.getElementById('lnameid').innerHTML = "*Please fill last name field";                                                                                      
		return false;
	}
	if(( lname.length < 5) || (lname.length > 20)){
		document.getElementById('lnameid').innerHTML = "*Please fill last name between 5 and 20";                                                                                      
		return false;
	}
	if(!isNaN(lname)){
		document.getElementById('lnameid').innerHTML = "*Please fill enter character";                                                                                      
		return false;
	}
		
	
	
	if(email == ""){
		document.getElementById('emailid').innerHTML = "*Please fill email field";                                                                                      
		return false;
	}
	
	
	
	if(contactNumber == ""){
		document.getElementById('contactid').innerHTML = "*Please fill contact number field";                                                                                      
		return false;
	}
	if(contactNumber != 10){
		document.getElementById('contactid').innerHTML = "*Contact number should be 10 digits";                                                                                      
		return false;
	}
	if(isNaN(contactNumber)){
		document.getElementById('contactid').innerHTML = "*Contact number should contains only digits";                                                                                      
		return false;
	}
	
	
	
	if(psswrd == ""){
		document.getElementById('password').innerHTML = "*Please fill password field";                                                                                      
		return false;
	}
	if(( psswrd.length < 6) || (psswrd.length > 20)){
		document.getElementById('password').innerHTML = "*Please fill last name between 6 and 20";                                                                                      
		return false;
	}
	if(psswrd != con_psswrd){
		document.getElementById('conpassword').innerHTML = "*Password are not matching";                                                                                      
		return false;
	}
	
	if(con_psswrd == ""){
		document.getElementById('conpassword').innerHTML = "*Please fill confirm password field";                                                                                      
		return false;
	}
}
