function checkPassword(password){



	passwordError = document.getElementById('passwordError');



	if(password.length >= 6){

		document.getElementById('passwordDiv').className = "form-group has-success";

		document.getElementById('Password').className = 'form-control form-control-success';

		//console.log("Classes: " + document.getElementById('Password').className);

		passwordError.innerHTML = "";

	}



	if(password.length < 6){

		document.getElementById('passwordDiv').className = "form-group has-danger";

		document.getElementById('Password').className = 'form-control form-control-danger';

		//console.log("Classes: " + document.getElementById('Password').className);

		passwordError.innerHTML = "Password must be longer that 6 letters...";



	}



	//console.log("Length: " + password.length);



}



function confirmPassword(cPassword){



	cPasswordError = document.getElementById('cPasswordError');



	if(cPassword == document.getElementById('Password').value){

		document.getElementById('cPasswordDiv').className = "form-group has-success";

		document.getElementById('cPassword').className = "form-control form-control-success";

		cPasswordError.innerHTML = "";

	}else{

		document.getElementById('cPasswordDiv').className = "form-group has-danger";

		document.getElementById('cPassword').className = "form-control form-control-danger";

		cPasswordError.innerHTML = "The two passwords do not match."

	}



}



function checkEmail(emailInput){

	

	emailError = document.getElementById('emailError');



	if(emailInput.length <= 0){

		document.getElementById('emailDiv').className = "form-group has-danger";

		document.getElementById('Email').className = "form-control form-control-danger";

		emailError.innerHTML = "How dare you leave that empty...";

	}else{

		document.getElementById('emailDiv').className = "form-group has-success";

		document.getElementById('Email').className = "form-control form-control-success";

		emailError.innerHTML = "";

	}



	if(emailInput.length < 6 && emailInput.length > 0){

		document.getElementById('emailDiv').className = "form-group has-warning";

		document.getElementById('Email').className = "form-control form-control-warning";

		emailError.innerHTML = "Check your spelling again. Maybe you missed a @ or a .";

	}



	if(emailInput.indexOf("@") < 1 || emailInput.indexOf("@") > emailInput.length){

		document.getElementById('emailDiv').className = "form-group has-warning";

		document.getElementById('Email').className = "form-control form-control-warning";

		emailError.innerHTML = "Check your spelling again. Maybe you missed a @.";	

	}



}



function checkUsername(username){

	usernameError = document.getElementById('usernameError');



	if(username.length <= 0){

		document.getElementById('usernameDiv').className = "form-group has-danger";

		document.getElementById('Username').className = "form-control form-control-danger";

		usernameError = "How dare you leave this empty...";

	}



	if(username.length > 0){

		document.getElementById('usernameDiv').className = "form-group has-success";

		document.getElementById('Username').className = "form-control form-control-success";

		usernameError = "";	

	}



}



function checkFirstName(firstName){

	firstNameError = document.getElementById('firstNameError');



	if(firstName.length <= 0){

		document.getElementById('firstNameDiv').className = "form-group has-danger";

		document.getElementById('FirstName').className = "form-control form-control-danger";

		firstNameError.innerHTML = "Do you not have a first name?";

	}



	if(firstName.length > 0){

		document.getElementById('firstNameDiv').className = "form-group has-success";

		document.getElementById('FirstName').className = "form-control form-control-success";

		firstNameError.innerHTML = "";

	}



}



function checkLastName(lastName){

	lastNameError = document.getElementById('lastNameError');



	if(lastName.length <= 0){

		document.getElementById('lastNameDiv').className = "form-group has-danger";

		document.getElementById('LastName').className = "form-control form-control-danger";

		lastNameError.innerHTML = "Do you not have a last name?";

	}



	if(lastName.length > 0){

		document.getElementById('lastNameDiv').className = "form-group has-success";

		document.getElementById('LastName').className = "form-control form-control-success";

		lastNameError.innerHTML = "";

	}



}