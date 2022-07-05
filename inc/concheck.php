
<?php 

// $servername = "localhost";
// $username = "root";
// $password = "";

// $conn = mysqli_connect('localhost', 'danielre_drey', 'testpword123456', 'danielre_portfolio');
// $conn = mysqli_connect('localhost', 'root', '', 'portcontact');

	// connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'portcontact');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	} else {

    echo '<span class="concheck" style="display: none;">connection ok</span>';
  }


?>