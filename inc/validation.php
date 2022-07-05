<?php
// define variables and set to empty values

$fnameErr = $elnameErr = $emailErr = $messageErr = "";
$fname = $lname = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["fname"]);
    }
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lname"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["lname"]);
    }
  }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
          $nameErr = "Email is required";
        } else {
          $name = test_input($_POST["email"]);
        }
      }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["message"])) {
              $nameErr = "A message is required";
            } else {
              $name = test_input($_POST["message"]);
            }
          }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = validate($_POST["fname"]);
  $lname = validate($_POST["lname"]);
  $email = validate($_POST["email"]);
  $subject = validate($_POST["subject"]);
  $message = validate($_POST["message"]);
}

function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>