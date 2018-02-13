<!DOCTYPE html>
<html>
<head>
	<title>Login Page PHP/Bootstrap</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>



</head>
<body>
	<div style="font-family: Goudy Old Style" class="container">
  		<div class="jumbotron">
    		<h1><i><b>PHP SignUp Page</b></i></h1>      
    		<p><i>Put the <b>correct information</b> in the boxes below<br>
    		your <b>Data</b> will be preview in the bottom of this page after clicking on the <b>submit</b> button</i></p>
    		<p><i>Please give this page a rank <b>below</b> mention</i></p>
  		</div>
	
	<form>
		
		<div class="form-group">
		<label>Name :</label>
		<input class="form-control" type="text" name="t1" placeholder="Enter Your Name" required="required">
		</div>

		<div class="form-group">
		<label>Father Name :</label>
		<input class="form-control" type="text" name="t2" placeholder="Enter Your Father's Name">
		</div>
		
		<div class="form-group">
		<label>Email :</label>
		<input class="form-control" type="email" name="t3" placeholder="Enter Your Email">
		</div>

		<div class="form-group">
		<label>Phone Number :</label>
		<input class="form-control" type="tel" name="t4" placeholder="Enter Your Phone Number">
		</div>
		
		<div class="form-group">
		<label>Password :</label>
		<input class="form-control" type="password" name="t5" placeholder="Enter Your Password">
		</div>
		
		<div class="form-group">
		<label>Select Your Date Of Birth :</label>
		<input class="form-control" type="Date" name="t6" placeholder="Enter Your DOB">
		</div>
		
		<div class="form-group">
		<label>Select Your Gender</label>
		<label class="radio-inline"><input type="radio" name="t7">Male</label>
		<label class="radio-inline"><input type="radio" name="t7">Female</label>
		</div>
		
		<div class="form-group">
		<label>Select Your State</label>
		<select class="form-control" name="t8">
			<option>France</option>
			<option>Iran</option>
			<option>Iraq</option>
			<option>Pakistan</option>
			<option>Saudi Arabia</option>
			<option>UAE</option>
			<option>UK</option>
			<option>USA</option>
		</select>
		</div>

		<div class="form-group">
		<label>Zip Code :</label>
		<input class="form-control" type="tel" name="t9" placeholder="Enter Your Country/City zip code">
		</div>
		
		<div class="form-group">
		<label>Comment:</label>
		<textarea class="form-control" rows="5" name="t10" ></textarea>
		</div>

		<div class="form-group">
		<label>Give Us a Rank :</label>
		<input class="form-control" type="number" name="t11" min="0" max="5" step="0.5">
		</div>

		<div class="form-group">
		<input class="btn btn-primary btn-block" type="submit" name="btn1" value="Submit">
		<input class="btn btn-info btn-block" type="Reset" value="Reset Your DATA">
		</div>
	</form>
	</div>
</body>
</html>

<?php 
if(isset($_Get['btn']))
{
$name = $_Get['t1'];
$fname = $_Get['t2'];
$email = $_Get['t3'];
$cell = $_Get['t4'];
$password = $_Get['t5'];
$dob = $_Get['t6'];
$gender = $_Get['t7'];
$state = $_Get['t8'];
$zip = $_Get['t9'];
$comment = $_Get['t10'];
$rank = $_Get['t11'];


echo "Name:		".$name;
echo "S/O:		".$name;
echo "Email:	".$name;
echo "Phone:	".$name;
echo "Password:	".$name;
echo "DoB:		".$name;
echo "Gender:	".$name;
echo "State:	".$name;
echo "Zip Code:	".$name;
echo "Comment:	".$name;
echo "You rate my page :	".$name."out of 10<br> Thank you";


}

?>