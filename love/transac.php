<?php
                $db = mysqli_connect('localhost', 'root', '') or
                die ('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db,'love') or die(mysqli_error($db));

						$username = $_POST['username'];
					  $password = $_POST['password'];
						// $mobile_number = $_POST['mobile_number'];
						$firstname = $_POST['firstname'];
						$lastname = $_POST['lastname'];
						$contactnumber = $_POST['contactnumber'];
						$email = $_POST['email'];
            

					switch($_GET['action']){
						case 'add';
								$query = "INSERT INTO user
								(username, user_password,firstname,lastname,contactnumber,email)        
								VALUES ('$username','$password','$firstname','$lastname','$contactnumber','$email')";
								mysqli_query($db,$query) or die ('Error in updating Database');


						break;

						}
				?>
                <script type="text/javascript">
			alert("Successfully added.");
			window.location = "login.php";
		</script>