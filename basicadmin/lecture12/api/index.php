<?php

/*
 * Set up constant to ensure include files cannot be called on their own
*/
define ( "MY_APP", 1 );
define ( "APPLICATION_PATH", "../application" );
define ( "TEMPLATE_PATH", APPLICATION_PATH . "/view" );



/*
 * Include the config.inc.php file
*/
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");
include (APPLICATION_PATH . "/inc/queries.inc.php");


//Very simple security check to set jsonOutput to a default 'Not authorised' if action request is not recognised
$jsonOutput = json_encode("Not Authorised");

//Verify later, but check which api method is being called
$action = $_REQUEST['action'];

//Use switch statement to execute the appropriate command

switch ($action) {
	
	
	case 'api_movie_listing_get':
		//Make the query
		$records = movie_listing_get();
		//Encode as json
		
		$jsonOutput =  json_encode($records);
		//print_r($records);
		
		break;
		
		
		case 'api_movie_listing_get_byid':
			//Make the query
			$movie_id = (int) $_REQUEST['movieid'];
			$records = movie_listing_get_byid($movie_id);
			//Encode as json
		
			$jsonOutput =  json_encode($records);
			//print_r($records);
		
			break;
	
	
	
	
}


header('Content-Type: application/json');

/* Output the JSON data */

echo $jsonOutput;


?>