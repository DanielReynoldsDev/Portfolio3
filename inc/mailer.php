<?php

	include('concheck.php');

	$fname = $lname = $email = $subject = $message = '';
	$errors = array('fname' => '','lname' => '','email' => '', 'subject' => '', 'message' => '');

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check fname
		if(empty($_POST['fname'])){
			$errors['fname'] = 'A name is required';
		} else{
			$fname = $_POST['fname'];
			if(!preg_match('/^[a-zA-Z0-9\s]+$/', $fname)){
				$errors['fname'] = 'Names must be letters and spaces only';
			}
		}

        		// check lname
		if(empty($_POST['lname'])){
			$errors['lname'] = 'A name is required';
		} else{
			$lname = $_POST['lname'];
			if(!preg_match('/^[a-zA-Z0-9\s]+$/', $lname)){
				$errors['lname'] = 'Names must be letters and spaces only';
			}
		}


		        		// check subject
						if(empty($_POST['subject'])){
							$subject = $_POST['subject'];
							if(!preg_match('/^[a-zA-Z0-9\s]+$/', $subject)){
								$errors['subject'] = 'Subject must be letters and spaces only';
							}
						}
        
                		// check message
		if(empty($_POST['message'])){
			$errors['message'] = 'A message is required';
		} else{
			$message = $_POST['message'];
			if(!preg_match('/^[a-zA-Z0-9\s]+$/', $message)){
				$errors['message'] = 'message must be letters and spaces only';
			}
		}



		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			// escape sql chars
            $fname = mysqli_real_escape_string($conn, $_POST['fname']);
            $lname = mysqli_real_escape_string($conn, $_POST['lname']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$subject = mysqli_real_escape_string($conn, $_POST['subject']);
			$message = mysqli_real_escape_string($conn, $_POST['message']);

			// create sql
			$sql = "INSERT INTO form (fname,lname,email,subject,message) VALUES('$fname','$lname','$email','$subject','$message')";

			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.php'); 
                echo '<span class="confirm" style="color: green; display: flex; justify-content: center;">Thank you, your message has been saved!</span>';
			} else {
				echo '<span class="confirma" style="color: red; display: flex; justify-content: center;">Sorry, something went wrong!</span>';
			}

			
		}

	} // end POST check

?>