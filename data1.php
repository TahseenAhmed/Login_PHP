<!DOCTYPE html>
<html>
<head>
	<title>Login Page PHP/Bootstrap</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
				<input class="form-control" type="text" name="t1" placeholder="Enter Your Name" required="required">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
				<input class="form-control" type="text" name="t2" placeholder="Enter Your Father's Name" required="required">
			</div>
		</div>
		
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input class="form-control" type="email" name="t3" placeholder="Enter Your Email" required="required">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
				<input class="form-control" type="tel" name="t4" placeholder="Enter Your Phone Number" required="required">
			</div>
		</div>
		
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input class="form-control" type="password" name="t5" placeholder="Enter Your Password" required="required">
			</div>
		</div>
		
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
				<input class="form-control" type="Date" name="t6" placeholder="Enter Your DOB" required="required">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<select class="form-control" name="t7" required="required">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
				<select class="form-control" name="t8" required="required">
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
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
				<input class="form-control" type="tel" name="t9" placeholder="Enter Your Country/City zip code" required="required">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
				<textarea class="form-control" rows="5" name="t10" placeholder="Give us Feedback about this page" required="required"></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-heart-empty"></i></span>
				<input class="form-control" type="number" name="t11" min="0" max="5" step="0.5" placeholder="Give Us Rank" required="required">
			</div>
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