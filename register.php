<!DOCTYPE html>
<html>	 
	<head>
		<title> Cuevas Bakeshop </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style>
		@import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');	
	
		body{
			background-image: url("background.jpg");
			background-repeat:no-repeat;
			background-size:cover;
			font-family: 'Cabin', sans-serif;
		}
		
		* {
		  box-sizing: border-box;
		}
		
		/* container paddings */
		.container {
		  padding: 19px;
		  background-color: white;
		  width: 50%;
		  margin: auto;
		}
		
		/* Full-width input fields */
		  input[type=text], input[type=password] {
		  padding: 15px;
		  width: 100%;
		  margin: 5px 0 22px 0;
		  display: inline-block;
		  border: none;
		  background: #e0e0e0;
		}
		
		input[type=text]:focus, input[type=password]:focus {
		  background-color: #ddd;
		  outline: none;
		}

		/* Overwrite default styles of hr */
		hr {
		  border: 1px solid #f1f1f1;
		  margin-bottom: 25px;
		}
		
		/* css for the submit button */
		.registerbtn {
		  background-color: #395f60;
		  color: white;
		  padding: 16px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  opacity: 0.9;
		}
		
		.registerbtn:hover {
		  opacity: 1;
		}

		/* Add a blue text color to links */
		a {
		  color: dodgerblue;
		}
		
		/* Set a grey background color and center the text of the "sign in" section */
		.signin {
		  background-color: #f2f2f2;
		  text-align: center;
		}

		</style>
	</head>

	<body>
		
	 <br><br>
	 <form action="register.php" method="POST">
		<div class="container">
			 <center>
			 <h1><b>Register</b></h1>
			 <p>Please register in this form to create an account.</p>
			 <hr>
			 </center>
			
			 <label for="username"><b>Username:</b></label>
			 <input type="text" placeholder="Enter Username" name="username" required="required" />
			 
			 <label for="psw"><b>Password:</b></label>
			 <input type="password" placeholder="Enter Password" name="password" required="required" />
			
			 <hr>
			 <br>
		
		<input type="submit" class="registerbtn" value="Register"/><br/><br/>
		</div>
		
		<div class="container signin">
				<p>Already have an Account? <a href="login.php">Login Here!</a>.</p>
		</div>
		
		</form>
	</body>
</html>	

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = ($_POST['username']);
	$password = ($_POST['password']);
	$bool = true;
	$db_name = "bsms_db";
	$db_username = "root";
	$db_pass = "";
	$db_host = "localhost";
	$con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //Connect to server
	$query = "SELECT * from user_list";
	$results = mysqli_query($con, $query); //Query the users table 
	while($row = mysqli_fetch_array($results)) //display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users) // checks if there are any matching fields
			{
				$bool = false; // sets bool to false
				Print '<script>alert("Username has been taken!");</script>'; //Prompts the user 
				Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
			}
	}
	if($bool) // checks if bool is true
	{
		mysqli_query($con, "INSERT INTO user_list (username, password) VALUES 
		('$username','$password')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user 
		Print '<script>window.location.assign("login.php");</script>'; // redirects to register.php
	}
}
?>

