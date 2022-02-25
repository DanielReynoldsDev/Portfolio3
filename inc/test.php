<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "portcontact";

  $error_name = "";
  $error_email = "";
  $error_tel = "";
  $error_subject = "";
  $error_message = "";
  $success = "";

  try {
    $pdo = new PDO("mysql:host=$servername;dbname=portcontact", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  // Taking all values from the form data(input)
  if (isset($_POST['submit'])) {
    $fname =  filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname =  filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);


    if($fname =="") {
      $error_name = "<span class='error'>Please enter your name.</span>";
    } elseif($lname =="") {
        $error_name = "<span class='error'>Please enter your name.</span>";
      }elseif($email == "") {
      $error_email=  "<span class='error'>Please enter your email.</span>"; 
    } elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
      $error_email= "<span class='error'>Please enter a valid email.</span>";
    } elseif($subject == "") {
      $error_tel =  "<span class='error'>Please enter a subject.</span>";
    } elseif($message == "") {
      $error_tel =  "<span class='error'>Please enter a message.</span>";
    } else {
      // Performing insert query execution
      $sql = "INSERT INTO form (firstname, lastname, email,  subject, message) 
      VALUES ('$fname', '$lname', '$email', '$subject', '$message')";
      $pdo->prepare($sql)->execute([$fname, $lname, $email, $subject, $message]);
      $success =  "<span class='success'>&nbsp;&nbsp;&nbsp;Enquiry Sent!</span>";
    }
  }
?>