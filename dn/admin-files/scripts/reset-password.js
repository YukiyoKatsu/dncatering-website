// Prevent Form Submit On Page Refresh
if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
}

// Get current date and time
var now = new Date();
var datetime = now.toLocaleString();

// Insert date and time into HTML
document.getElementById("datetime").innerHTML = datetime;

//Show password 
function myFunction(id) {
	var x = document.getElementById(id);
	var y = document.getElementById("eyeicon");
	if (x.type === "password") {
		x.type = "text";
		y.src = "admin-files\\pictures\\eye-open.png";
	} else {
		x.type = "password";
		y.src = "admin-files\\pictures\\eye-close.png";
	}
}
function myFunction2(id, id2) {
	var x = document.getElementById(id);
	var y = document.getElementById(id2);
	if (x.type === "password") {
		x.type = "text";
		y.src = "pictures\\eye-open.png";
	} else {
		x.type = "password";
		y.src = "pictures\\eye-close.png";
	}
}

//Password validation
function check(){
	var input = document.getElementById('newPassword1').value;
	var specialCharacters = /[!@#$%^&*+=>\x22\x27\x28\x29\x2C\x2D\x2E\x1B\x1D\x1F\x7B\x7C\x7D\x7F\x2F\x3A\x3B\x60\x5F\x5B\x5D\x3F]/;

	input = input.trim();
	document.getElementById('newPassword1').value = input;

	if(input.length >= 8){
		document.getElementById('check0').style.color = 'green';
	}
	else{
		document.getElementById('check0').style.color = 'red';
	}

	if(input.match(/[A-Z]/)){
		document.getElementById('check1').style.color = 'green';
	}
	else{
		document.getElementById('check1').style.color = 'red';
	}

	if(input.match(/[a-z]/)){
		document.getElementById('check2').style.color = 'green';
	}
	else{
		document.getElementById('check2').style.color = 'red';
	}

	if(input.match(/[0-9]/)){
		document.getElementById('check3').style.color = 'green';
	}
	else{
		document.getElementById('check3').style.color = 'red';
	}

	if (specialCharacters.test(input)) {
        document.getElementById('check4').style.color = 'green';
    } else {
        document.getElementById('check4').style.color = 'red';
    }

	if(input.length >= 8 && input.match(/[A-Z]/) && input.match(/[a-z]/) && input.match(/[0-9]/) && specialCharacters.test(input)){
		document.getElementById('check0').style.display = 'none';
		document.getElementById('check1').style.display = 'none';
		document.getElementById('check2').style.display = 'none';
		document.getElementById('check3').style.display = 'none';
		document.getElementById('check4').style.display = 'none';
		document.getElementById('valid').style.display = 'block';
	}
	else{
		document.getElementById('check0').style.display = 'block';
		document.getElementById('check1').style.display = 'block';
		document.getElementById('check2').style.display = 'block';
		document.getElementById('check3').style.display = 'block';
		document.getElementById('check4').style.display = 'block';
		document.getElementById('valid').style.display = 'none';
	}
}

function conditions(){
	var inputfield = document.getElementById('newPassword1');
	var input = document.getElementById('newPassword1').value;
	
	inputfield.addEventListener('focus', () => {
		document.getElementById('check0').style.display = 'block';
		document.getElementById('check1').style.display = 'block';
		document.getElementById('check2').style.display = 'block';
		document.getElementById('check3').style.display = 'block';
		document.getElementById('check4').style.display = 'block';
		document.getElementById('validation_container').style.display = 'show';
	})
	inputfield.addEventListener('blur', () => {
		document.getElementById('valid').style.display = 'none';
	})
}

function conditions1(){
    var password = document.getElementById("newPassword1").value;
    var repassword = document.getElementById("confirmPassword1").value;
	
	if (password == repassword){
		document.getElementById('notValid').style.display = 'none';
	}

	// inputfield.addEventListener('focus', () => {
	// 	document.getElementById('notValid').style.display = 'none';
	// })
}

//validate password
function validatePassword2(event) {
    var password = document.getElementById("newPassword1").value;
    var repassword = document.getElementById("confirmPassword1").value;
	var input = document.getElementById('newPassword1').value;
    
    if (password !== repassword) {
		event.preventDefault(); // Prevent form submission
        document.getElementById('notValid').style.display = 'block';
    }
	if (password == repassword){
		if(input.length < 8 || !input.match(/[A-Z]/) || !input.match(/[a-z]/) || !input.match(/[0-9]/) || specialCharacters.test(!input)){
			event.preventDefault();
		}
	}
}