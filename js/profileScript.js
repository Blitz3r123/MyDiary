function checkPassword(password){



	passwordError = document.getElementById('passwordError');



	if(password.length >= 6){

		document.getElementById('passwordDiv').className = "form-group has-success";

		document.getElementById('Password').className = 'form-control form-control-success';

		//console.log("Classes: " + document.getElementById('Password').className);

		passwordError.innerHTML = "";

		document.getElementById('updateButton').style.visibility = "visible";

	}



	if(password.length < 6){

		document.getElementById('passwordDiv').className = "form-group has-danger";

		document.getElementById('Password').className = 'form-control form-control-danger';

		//console.log("Classes: " + document.getElementById('Password').className);

		passwordError.innerHTML = "Password must be longer that 6 letters...";

		document.getElementById('updateButton').style.visibility = "hidden";

	}



	//console.log("Length: " + password.length);



}

function confirmPassword(cPassword){



	cPasswordError = document.getElementById('cPasswordError');

	console.log(cPassword.length);

	if(cPassword == document.getElementById('Password').value){

		document.getElementById('cPasswordDiv').className = "form-group has-success";

		document.getElementById('cPassword').className = "form-control form-control-success";

		cPasswordError.innerHTML = "";

		document.getElementById('updateButton').style.visibility = "visible";

	}else{
		document.getElementById('cPasswordDiv').className = "form-group has-danger";

		document.getElementById('cPassword').className = "form-control form-control-danger";

		cPasswordError.innerHTML = "The two passwords do not match."

		document.getElementById('updateButton').style.visibility = "hidden";		
	}

	if(cPassword.length == 0){

		document.getElementById('cPasswordDiv').className = "form-group has-danger";

		document.getElementById('cPassword').className = "form-control form-control-danger";

		cPasswordError.innerHTML = "The two passwords do not match."

		document.getElementById('updateButton').style.visibility = "hidden";

	}



}

function toggleTheme(){
	nav = document.getElementById('nav'); 
	container = document.getElementById('container'); 
	nameButton = document.getElementById('nameButton');

	if(nav.className == "navbar navbar-toggleable-lg fixed-top navbar-inverse bg-inverse"){
		nav.className = "navbar navbar-toggleable-md navbar-light bg-faded";
		container.style.backgroundColor="#292B2C";
		nameButton.style.backgroundColor="292B2C";
		nameButton.style.color="white";
	}else{
		nav.className = "navbar navbar-toggleable-lg fixed-top navbar-inverse bg-inverse";
		container.style.backgroundColor="white";
		nameButton.style.backgroundColor="white";
		nameButton.style.color="#292B2C";
	}
}

function showPersonal(){
	$('#personalDetails').show();
	$('#technicalDetails').hide();	
}

function showTechnical(){
	$('#technicalDetails').show();
	$('#personalDetails').hide();
	document.getElementById('list').style.paddingTop+= "10px";
}

$(document).ready(function(){
	$("#technicalDetails").hide();
});

function checkFirstName(firstName){

	firstNameError = document.getElementById('firstNameError');



	if(firstName.length <= 0){

		document.getElementById('firstNameDiv').className = "form-group has-danger";

		document.getElementById('FirstName').className = "form-control form-control-danger";

		firstNameError.innerHTML = "Do you not have a first name?";

		document.getElementById('updateButton').style.visibility = "hidden";

	}



	if(firstName.length > 0){

		document.getElementById('firstNameDiv').className = "form-group has-success";

		document.getElementById('FirstName').className = "form-control form-control-success";

		firstNameError.innerHTML = "";

		document.getElementById('updateButton').style.visibility = "visible";

	}



}



function checkLastName(lastName){

	lastNameError = document.getElementById('lastNameError');



	if(lastName.length <= 0){

		document.getElementById('lastNameDiv').className = "form-group has-danger";

		document.getElementById('LastName').className = "form-control form-control-danger";

		lastNameError.innerHTML = "Do you not have a last name?";

		document.getElementById('updateButton').style.visibility = "hidden";

	}



	if(lastName.length > 0){

		document.getElementById('lastNameDiv').className = "form-group has-success";

		document.getElementById('LastName').className = "form-control form-control-success";

		lastNameError.innerHTML = "";

		document.getElementById('updateButton').style.visibility = "visible";

	}



}