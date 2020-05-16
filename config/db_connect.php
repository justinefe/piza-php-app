<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'thejust', 'efe123', 'pizza_ninja');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>