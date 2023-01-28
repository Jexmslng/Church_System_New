<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Signup</title>
</head>
<body>

    <div class="SignupContainer">
		<h3>Sign Up</h3>
		<form class="SignupForm">
			<label class="SignupLabel">Last Name</label>
			<input class="SignupInput" type="" name="">
			<br>
			<label class="SignupLabel">First Name</label>
			<input class="SignupInput" type="" name="">
			<br>
			<label class="SignupLabel">Middle Name</label>
			<input class="SignupInput" type="" name="">
			<br>
			<label class="SignupLabel">Username</label>
			<input class="SignupInput" type="" name="">
			<br>
			<label class="SignupLabel">Email</label>
			<input class="SignupInput" type="" name="">
            <br>
			<label class="SignupLabel">Phone</label>
			<input class="SignupInput" type="" name="">
			<br>
			<label class="SignupLabel">Age</label>
			<input class="SignupInput" type="" name="">
			<br>
			<label class="SignupLabel">Birthday</label>
			<input class="SignupInput" type="" name="">
			<br>
			<label class="SignupLabel">Password</label>
			<input class="SignupInput" type="" name="">
			<br>
			<label class="SignupLabel">Confirm Password</label>
			<input class="SignupInput" type="" name="">
			<br>
			<label class="SignupLabelSelect">Ministry</label>
			<select class="SignupSelect" multiple>
				<option value=""></option>
				<option value="">Faith In Formation Commision</option>
				<option value="">Social Action</option>
				<option value="">Youth Commision</option>
				<option value="">Worship Comission</option>
				<option value="">BEC</option>
			</select>
			<br>
			<button>Create Account</button>
		</form>
	</div>

<script>
	$(document).ready(function() {
    $('.SignupSelect').select2();
});
</script>

@include('partials.HomeFooter')
