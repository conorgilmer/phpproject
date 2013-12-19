<?php

/*
 * Gets a complete list of movies Returns: Associative Array
 */
function product_listing_get() {
	
	$sqlQuery = "SELECT * FROM property";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	
	while ( $records [] = mysql_fetch_assoc ( $result ) )
		;
	
	array_pop ( $records ); // pop the null record which was pushed on as last item
	
	return $records;

}

/*
 * Gets a complete list of movies Returns: Associative Array
 */
function product_listing_get_byid($movie_id) {
	
	$movie_id = ( int ) $movie_id;
	$sqlQuery = "SELECT * FROM prodperty where movie_id=$movie_id";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	
	while ( $records [] = mysql_fetch_assoc ( $result ) )
		;
	
	array_pop ( $records ); // pop the null record which was pushed on as last item
	
	return $records;

}

function mf_get_all() {
	
	$sqlQuery = "SELECT * FROM mfs where 1 order by mf_id asc";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	
	if ($result) {
		while ( $records [] = mysql_fetch_assoc ( $result ) );
		
		
		
		array_pop ( $records ); // pop the null record which was pushed on as last
		                     // item
	}
	return $records;

}

function properties_get_all() {
	
	$sqlQuery = "SELECT * FROM property where 1 order by property_id asc";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	
	if ($result) {
		while ( $records [] = mysql_fetch_assoc ( $result ) );
		
		
		
		array_pop ( $records ); // pop the null record which was pushed on as last
		                     // item
	}
	return $records;

}


function contacts_get_all() {
	
	$sqlQuery = "SELECT * FROM contact where 1 order by contact_id asc";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	
	if ($result) {
		while ( $records [] = mysql_fetch_assoc ( $result ) );
		
		
		
		array_pop ( $records ); // pop the null record which was pushed on as last
		                     // item
	}
	return $records;

}

function counties_get_all() {
	
	$sqlQuery = "SELECT * FROM counties where 1 order by county_id asc";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	
	if ($result) {
		while ( $records [] = mysql_fetch_assoc ( $result ) );
		
		
		
		array_pop ( $records ); // pop the null record which was pushed on as last
		                     // item
	}
	return $records;

}



function get_Counties($id) {
	
	$sqlQuery = "SELECT * FROM counties where county_id = ".$id;
	$result = mysql_query ( $sqlQuery );
	//$records = array ();
	//$row = mysql_fetch_array($sqlQuery);
        //die ($row);
        
        //$result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);
        
        
        
	return $row['county_name'];
}



// list hte house types
function housetype_get_all() {
	
	$sqlQuery = "SELECT * FROM housetype where 1 order by housetype_id asc";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	
	if ($result) {
		while ( $records [] = mysql_fetch_assoc ( $result ) );
		
		
		
		array_pop ( $records ); // pop the null record which was pushed on as last
		                     // item
	}
	return $records;

}

function photos_get_all() {
	
	$sqlQuery = "SELECT * FROM photos where 1 order by photo_id asc";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	
	if ($result) {
		while ( $records [] = mysql_fetch_assoc ( $result ) );
		
		
		
		array_pop ( $records ); // pop the null record which was pushed on as last
		                     // item
	}
	return $records;

}
