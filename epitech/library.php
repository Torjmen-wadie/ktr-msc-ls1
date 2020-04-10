<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="This project is a business card manager. It is aimed at young entrepreneurs who are looking for a digital solution to store the information from their multiple business cards acquired during their various networking evenings.">
	<title>TO-KTR | Lirary</title>
    <link rel="stylesheet" type="text/css" href="test.css">
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php include('include/menu.php'); ?>
	<div class="content">
		<div class="col-md-6"><h3 class="">  Welcome to your Library </h3><hr/></div>

		<div class="col-md-6">
		<form>
		  <div class="form-group">
		    <label for="fullName">Full name</label>
		    <input type="name" class="form-control" id="full_usr_name" maxlength="64" aria-describedby="Name" placeholder="Type your full name...">
		  </div>
		  <div class="form-group">
		    <label for="companyName">Company name</label>
		    <input type="name" class="form-control" id="company_usr_name" maxlength="64" aria-describedby="Company" placeholder="Type your Company name...">
		  </div>
		  <div class="form-group">
		    <label for="emailAdress">Email address</label>
		    <input type="email" class="form-control" id="usr_email" required="true" aria-describedby="Email" placeholder="Type your email...">
		  </div>
		  <div class="form-group">
		    <label for="phoneNumber">Phone number</label>
		    <input type="phone" class="form-control" id="usr_phone_number" aria-describedby="Phone" placeholder="Type your Phone number...">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
