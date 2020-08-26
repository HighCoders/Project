function validateLoginForm(){

	var u = document.getElementById("u").innerHTML="required";
	var p = document.getElementById("u").innerHTML="required";
	var valid = true;
	if (u=="") {
		valid = false;
		document.getElementById("username_validator").innerHTML ="invalid";
	}

	if (p ==""){
		valid = true;
		document.getElementById("pass_validator").innerHTML ="invalid";
	}

	return valid;
}