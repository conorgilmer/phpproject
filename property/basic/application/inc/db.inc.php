<?php

/*
 * This constant is declared in index.php
* It prevents this file being called directly
*/
defined('MY_APP') or die('Restricted access');

//remove die('boom');
$link_id=@mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
//$link_id=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD); //spelling
/*if($link_id) {
	
	die("Successful Connection");
} else {

	die ("UnSuccessful Connection " . DB_HOST);
	EXIT;
}

if(mysql_select_db("movietutorial",$link_id)) {
	//echo "<p>Connection to database successful </p>";
	header("Location: index.php"); //spelling
} else {

	//echo "<p>Connection to database failed  </p>";
}*/

if ($link_id) {
    //echo("Successful Connect to db server");
    //put inside if
    if(mysql_select_db(DB_DATABASE, $link_id)) {

       // echo("DB Selected");
    } else {
        echo("<b>Couldn't select db</b>");
    }
    
} else {
    
    echo ("<b>Couldn't connect to db</b>");
}