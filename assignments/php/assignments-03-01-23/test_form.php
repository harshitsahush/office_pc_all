<?php

	$name_err = $email_err = $message = $name = $email = '';
	function var_check($var) {
		if(isset($var) && !empty($var))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	if($_POST['submit'])
	{
		if(var_check($_POST['name']) && var_check($_POST['email']))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = "Hi ".$name."Your email is ".$email;
		}
		else
		{
			if(!var_check($_POST['name']))
			{
				$name_err = "*Required";
			}

			if(!var_check($_POST['email']))
			{
				$email_err = "*Required";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
  	<head>
    	<title>Simple registration form</title>
  	</head>

  	<body>
    	<h2>PHP Form Validation Example</h2>

		<form method="post" action="">  
			Name: <input type="text" name="name">
			<span style="color:red"><?php echo $name_err;  ?></span>   
			<br><br>
			E-mail: <input type="text" name="email">
			<span style="color:red"><?php echo $email_err; ?></span>
			<br><br>
			<!-- Website: <input type="text" name="website">
			<br><br>
			Comment: <textarea name="comment" rows="5" cols="40"></textarea>
			<br><br>
			Gender:
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="other">Other
			<br><br> -->
			<input type="submit" name="submit" value="Submit">
			<br><br>
			<?php echo $message; ?>  
		</form>
  	</body>
</html>


