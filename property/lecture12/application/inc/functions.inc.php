<?php

/*
 * This constant is declared in index.php
* It prevents this file being called directly
*/
defined('MY_APP') or die('Restricted access');


function validateMovie($movie) {
	
	
	return true;
	
	
}

function saveMovie($movie ) {
	
	$sqlQuery = "INSERT INTO movies (title, _cinema_id,	runningtime,
	rating)
	values ('{$movie['title']}','{$movie['cinema_id']}', '{$movie['runningtime']}','{$movie['rating']}')";
	$result = mysql_query($sqlQuery);
	
	

	
	if (!$result) {
		echo $sqlQuery;
		
		die("error" . mysql_error());
	} 
	
	
	return mysql_insert_id();
	
}
/* 
 * Realistically, you would pass function $_FILES array, but here we are assuming it's available
 * UPLOAD_PATH is defined in config.inc.php
 */
function uploadFiles($movie_id) {
	//echo UPLOAD_PATH;
	//echo $_FILES['uploadedfile']['tmp_name'];
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], UPLOAD_PATH)) {
		
		saveImageRecord($movie_id, basename( $_FILES['uploadedfile']['name']));
		
	
	} else{
		echo "<p>There was an error uploading the file, please try again!";
	}
	
	
}


function saveImageRecord($movie_id, $imageName) {
	
	
	$sqlQuery = "UPDATE movies SET imagefile = '$imageName' where movie_id = $movie_id"; 
	$result = mysql_query($sqlQuery);
	
	
	
	
	
	
	
	
}

/*
 * Typical things that go wrong with next script
 * You must update the insert.php file to capture any new fields
 * You must ensure there are commas on any new lines you create
 * To resolve issues, uncomment the lines which echo the $sqlQuery  and die();
 */


function updateMovie($movie) {
    $movieID = (int) $movie['movie_id'];
    $sqlQuery = "UPDATE movies SET ";
     $sqlQuery .= " rating = '" . $movie['rating'] . "',";
     $sqlQuery .= " runningtime = '". $movie['runningtime'] . "',";
     $sqlQuery .= " title = '". $movie['title'] . "',";
     $sqlQuery .= " description = '". $movie['description'] . "', ";
     $sqlQuery .= " _cinema_id = '". $movie['cinema_id'] . "'";
    
    $sqlQuery .= " WHERE movie_id = $movieID";
    
  //  echo $sqlQuery;
 //  die("...");
    
    $result = mysql_query($sqlQuery);
	
    
    
	if (!$result) {
		die("error" . mysql_error());
        }
	
    
}


function deleteMovie($id) {
    $movieID = (int) $id;
    $sqlQuery = "DELETE FROM MOVIES where movie_id = $movieID";
    
    $result = mysql_query($sqlQuery);
    if (!$result) {
		die("error" . mysql_error());
        }
}


function retrieveMovie($id) {

	$sqlQuery = "SELECT * from movies WHERE movie_id = $id";

	$result = mysql_query($sqlQuery);
	
	if(!$result) die("error" . mysql_error());
	
	
	//echo $sqlQuery;


	return mysql_fetch_assoc($result);
	
}




function output_edit_link($id) {
	
	return "<a href='edit.php?id=$id'>Edit</a>";
	
	
}
function output_delete_link($id) {

	return "<a href='delete.php?id=$id'>Delete</a>";


}

function output_selected($currentValue, $valueToMatch) {
	
	
	if ($currentValue == $valueToMatch) {
		
		return "selected ='selected'";
		
	}
	
}

function authenticate($username, $password) {   
    $boolAuthenticated = false;
    
    $sqlQuery = "SELECT * from adminusers WHERE ";
    $sqlQuery .= "username = '" . $username . "'";
    $sqlQuery .= " AND ";
    $sqlQuery .= "password = '" .$password . "'";
    
    $result = mysql_query($sqlQuery);
    
    if (!$result)  die("Error: " . $sqlQuery . mysql_error());
    
    if (mysql_num_rows($result)==1) {
        $boolAuthenticated = true;
    }
    
    return $boolAuthenticated;
}