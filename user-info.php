<?php
    // debugger
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
    // creat connection
	  $conn = mysqli_connect('178.62.119.110', 'onedayonly_user', 'mDhhqsG4ydc5RAHp','onedayonly');

		if( isset($_POST['first-name']) && isset($_POST['last-name'])  && isset($_POST['email-address'])){

			$name = $_POST['first-name'];
			$surname = $_POST['last-name'];
			$email = $_POST['email-address'];

		// Check connection
			if (!$conn) {
	    	die("Connection failed: " . mysqli_connect_error());
			}

				$sql = "INSERT INTO user_data (name, surname, email) VALUES ('$name', '$surname', '$email')";

      // Still need to do sql injection


				if (mysqli_query($conn, $sql)) {
			    $last_id = mysqli_insert_id($conn);
			    echo "New record created successfully. Last inserted ID is: " . $last_id;
				} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				mysqli_close($conn);

}



?>
