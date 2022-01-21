<?php
                $db = mysqli_connect('localhost', 'root', '') or
                die ('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db,'love') or die(mysqli_error($db));

					// 	$applicant_name = $_POST['applicant_name'];
					//   $applicant_address = $_POST['applicant_address'];
					// 	// $mobile_number = $_POST['mobile_number'];
					// 	$applicant_number = $_POST['applicant_number'];
					// 	$applicant_nationality = $_POST['applicant_nationality'];
					// 	$applicant_sex = $_POST['applicant_sex'];
					// 	$applicant_status = $_POST['applicant_status'];
					// 	$applicant_birthplace = $_POST['applicant_birthplace'];
					// 	$applicant_fathername = $_POST['applicant_fathername'];
					// 	$applicant_mothername = $_POST['applicant_mothername'];
					// 	$applicant_spousename = $_POST['applicant_spousename'];
					// 	$applicant_LCA = $_POST['applicant_LCA'];
					// 	$applicant_EA = $_POST['applicant_EA'];
					// 	$applicant_bloodtype = $_POST['applicant_bloodtype'];
					// 	$applicant_eyecolor = $_POST['applicant_eyecolor'];
					// 	$applicant_emergency_contact = $_POST['applicant_emergency_contact'];
					// 	$applicant_emergency_contact_no = $_POST['applicant_emergency_contact_no'];
					// 	$applicant_toa = $_POST['applicant_toa'];
						
                    $applicant_id = $_GET['applicant_id'];
                    
					$query = mysqli_query($db,"UPDATE applicant SET app_status=1 WHERE applicant_id='$applicant_id'");

						
				?>
                <script type="text/javascript">
			alert("Successfully added");
			window.location = "applicants.php?applicant_id=";
		</script>