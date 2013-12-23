<?php

/*
 * Gets a complete list of movies Returns: Associative Array
 */
function movie_listing_get() {
	
	$sqlQuery = "SELECT * FROM movies";
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
function movie_listing_get_byid($movie_id) {
	
	$movie_id = ( int ) $movie_id;
	$sqlQuery = "SELECT * FROM movies where movie_id=$movie_id";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	
	while ( $records [] = mysql_fetch_assoc ( $result ) )
		;
	
	array_pop ( $records ); // pop the null record which was pushed on as last item
	
	return $records;

}

function cinemas_get_all() {
	
	$sqlQuery = "SELECT * FROM cinemas where 1 order by cinema_id asc";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	
	if ($result) {
		while ( $records [] = mysql_fetch_assoc ( $result ) );
		
		
		
		array_pop ( $records ); // pop the null record which was pushed on as last
		                     // item
	}
	return $records;

}