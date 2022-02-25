
<?php 

// $servername = "localhost";
// $username = "root";
// $password = "";

	// connect to the database
	$conn = mysqli_connect('localhost', 'danielre_drey', 'testpword123456', 'danielre_portfolio');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	} else {

    echo '<span class="concheck" style="display: none;">connection ok</span>';
  }


?>