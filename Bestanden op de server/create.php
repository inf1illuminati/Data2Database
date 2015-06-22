<?php
 
	/*
	 * Following code will create a new product row
	 * All product details are read from HTTP Post Request
	 */
	 
	// array for JSON response
	$response = array();
	
	$response["success"];
	$response["message"];
	 
	// check for required fields
	// check er uitgehaald
	//if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])) {
	 
		//$ID = $_POST['ID'];
		$x = $_POST['x'];
		$y = $_POST['y'];
		$z = $_POST['z'];
	 
		// include db connect class
		require_once __DIR__ . '/db_connect.php';
	 
		// connecting to db
		$db = new DB_CONNECT();
	 
		// mysql inserting a new row
		//$result = mysql_query("INSERT INTO waarden(waardeX, waardeY, waardeZ) VALUES('$x', '$y', '$z')");
		$result = mysql_query("INSERT INTO stringtest(strX, strY, strZ) VALUES('$x', '$y', '$z')");
	 
		// check if row inserted or not
		if ($result) {
			// successfully inserted into database
			$response["success"] = 1;
			$response["message"] = "Product successfully created.";
	 
			// echoing JSON response
			echo json_encode($response);
		} else {
			// failed to insert row
			$response["success"] = 0;
			$response["message"] = "Oops! An error occurred.";
	 
			// echoing JSON response
			echo json_encode($response);
		}
	//} else {
		// required field is missing
		//$response["success"] = 0;
		//$response["message"] = "Required field(s) is missing";
	 
		// echoing JSON response
		//echo json_encode($response);
		
		echo json_encode($response);
		die();
	//}
?>