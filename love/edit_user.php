<?php
		
			$zz = $_POST['user_id'];
			$username = $_POST['username'];
		  $password = $_POST['password'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
            $contactnumber = $_POST['contactnumber'];
			$email = $_POST['email'];

		$db = mysqli_connect('localhost', 'root', '') or
		die ('Unable to connect. Check your connection parameters.');
		mysqli_select_db($db,'love') or die(mysqli_error($db));

		$query = mysqli_query($db,"UPDATE user SET firstname='$firstname', lastname='$lastname', 
         email='$email',  username='$username',  user_password='$password' WHERE  user_id='$zz'");


?>
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = " main.php";
		</script>