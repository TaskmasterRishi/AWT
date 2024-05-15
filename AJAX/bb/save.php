<?php
	// include config file
	require_once 'config.php';

	//a PHP Super Global variable which used to collect data after submitting it from the form
	// Sanitize fist the values of this variable
	$request = sanitize($_REQUEST);

	// Validate the data
	$validation = validate($request, [
		'email' => 'required|email|unique:employees|min:2|max:100',
		'first_name' => 'required|min:2|max:100',
		'last_name' => 'required|min:2|max:100',
		'address' => 'required|min:2|max:250'
	]);

	// Defined $result as array
	$result = [];

	// Check if no validation errors
	if(!count($validation)):
		// SQL Statement
		$sql = "INSERT INTO employees (email, first_name, last_name, address)
		VALUES (
			'".$request['email']."', 
			'".$request['first_name']."', 
			'".$request['last_name']."', 
			'".$request['address']."'
		)";

		// Process the query
		if ($db->query($sql)) {
		  $result['response'] = "Employee has been created.";
		} else {
		  $result['response'] = "Error: " . $sql . "<br>" . $db->error;
		}

		// Close the connection after using it
		$db->close();
	else:
		$result['has_error'] = 1;
	   	$result['errors'] = $validation;
	endif;

	// Encode array into json format
	echo json_encode($result);


?>