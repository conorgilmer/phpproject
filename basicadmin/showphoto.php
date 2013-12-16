<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 * 
 * 
 */

// We'll start out again by connecting to the database
// replace "user_name" and "password" with your real login info

$dbh = mysql_connect("localhost","site101_property","property") or die("There was a problem with the database connection.");
    $dbs = mysql_select_db("site101_property", $dbh) or die("There was a problem selecting the categories.");

// Now, We'll check to make sure our $_GET variable is a number

if(!is_numeric($_GET['photo_id'])){
    echo "Invalid file chosen.";
    exit;
}

// Next, we'll run a query on the database to get the file out

$sql = "SELECT * FROM photos
            WHERE photos.photo_id = ".$_GET['photo_id'];
            
$result = mysql_query($sql);

// If the query was invalid or failed to return a result, an error is thrown

if(!$result || !mysql_num_rows($result)){
    echo "Invalid file chosen.";
    exit;
}

// Finally, we will send the file to the browser

$curr_file = mysql_fetch_assoc($result);

$size = $curr_file['file_size'];
$type = $curr_file['file_type'];
$name = $curr_file['file_name'];
$content = $curr_file['file_content'];

header("Content-length: ".$size."");
header("Content-type: ".$type."");
header('Content-Disposition: attachment; filename="'.$name.'"');
echo $content;

// That's it. We're finished.
?>
