<?php

/*
 * This constant is declared in index.php
* It prevents this file being called directly
*/
defined('MY_APP') or die('Restricted access');


//basic validation to snsure a filed is entered in address line one
function validateProperty ($property) {
    $field = $property['property_addr1'];
   // print_r($field);
   // print_r($property);
    
    if (empty($field))
        return false;
    else 
        return true;
}

// basic validation insureing contant name is entered
function validateContact ($contact) {
    $field = trim($contact['contact_name']);
    if (empty($field)) {
     
    return false;}
    else 
        return true;
}

// get the type
function getHouseType($c_id ) {
	
	$sqlQuery = "SELECT housetype_name from housetype where housetype_id = " . $c_id;
	
	$result = mysql_query($sqlQuery);

	if (!$result) {
		echo $sqlQuery;
		
		die("error" . mysql_error());
	} 
	//comment in	
        $ret = mysql_fetch_array($result);
	return $ret['housetype_name'];
	
}

// save a county
function getCounty($c_id ) {
	
	$sqlQuery = "SELECT county_name from counties where county_id = " . $c_id;
	
	$result = mysql_query($sqlQuery);

	if (!$result) {
		echo $sqlQuery;
		
		die("error" . mysql_error());
	} 
	//comment in	
        $ret = mysql_fetch_array($result);
	return $ret['county_name'];
	
}


// save a Agent contact details
function saveContact($contact ) {
	
	$sqlQuery = "INSERT INTO contact (contact_name, contact_phone_no, contact_email)
	values ('{$contact['contact_name']}', 
                '{$contact['contact_phone_no']}',
                '{$contact['contact_email']}')";
	
	$result = mysql_query($sqlQuery);

	if (!$result) {
		echo $sqlQuery;
		
		die("error" . mysql_error());
	} 
	//comment in	
	return mysql_insert_id();
	
}

// fix typos
function saveProduct($product ) {
	//add desc and country 
        $ts = date('Y-m-d H:i:s');
        //$ts = new DateTime();
        //$ts->getTimestamp();
        //$ts = DateTime::createFromFormat('!Y-m-d', date('Y-m-d'));
	$sqlQuery = "INSERT INTO property (property_addr1, 
property_addr2,property_addr3,property_county, property_type, property_price, 
property_size,property_status,property_contact, property_photo,
property_ts, property_date_created
)
	values ('{$product['property_addr1']}','{$product['property_addr2']}','{$product['property_addr3']}',
            '{$product['property_county']}','{$product['property_type']}', '{$product['property_price']}'
        , '{$product['property_size']}', '{$product['property_status']}', '{$product['property_contact']}'
            , '{$product['property_photo']}', '{$ts}' , '{$ts}')";
	
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
function uploadFiles($product_id) {
	// added to write fir
        //echo "-files - " . $_FILES["uploadedfile"]["size"];
        //echo " - maxfilesize - " . $_POST['MAX_FILE_SIZE'];  
        //timestamp the filename for upload to avoid duplicates
        $fnamearray = pathinfo($_FILES["uploadedfile"]["name"]);
        $ts_filename = $fnamearray['filename'].'_'.time().'.'.$fnamearray['extension'];
        
        $target = UPLOAD_PATH . basename( $ts_filename ) ; 
        $ok=1; 

        //if ($_FILES["uploadedfile"]["size"] < $_POST['MAX_FILE_SIZE']){
	// $target = UPLOAD_PATH . basename($_FILES['uploadedfile']['tmp_name']); 
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target)) {
		
		saveImageRecord($product_id, basename( $ts_filename));
		
	
	} else{
		echo "<p>There was an error uploading the file, please try again!";
	}
        
}


function saveImageRecord($product_id, $imageName) {
	
	echo "<br>image name " . $imageName;
        //fix typo product id
	$sqlQuery = "UPDATE products SET imagefile = '$imageName' where product_id = $product_id"; 
	$result = mysql_query($sqlQuery);
	
	return $result;
	
}

/*
 * Typical things that go wrong with next script
 * You must update the insert.php file to capture any new fields
 * You must ensure there are commas on any new lines you create
 * To resolve issues, uncomment the lines which echo the $sqlQuery  and die();
 */


function updateProperty($product) {
    $propertyID = (int) $product['property_id'];
           $ts = date('Y-m-d H:i:s'); //modified timestamp
    $sqlQuery = "UPDATE property SET ";
     $sqlQuery .= " property_addr1 = '" . $product['property_addr1'] . "',";
     $sqlQuery .= " property_addr2 = '" . $product['property_addr2'] . "',";
     $sqlQuery .= " property_addr3 = '" . $product['property_addr3'] . "',";
     $sqlQuery .= " property_contact = '" . $product['property_contact'] . "',";
     $sqlQuery .= " property_county = '" . $product['property_county'] . "',";
     $sqlQuery .= " property_desc = '" . $product['property_desc'] . "',";
     $sqlQuery .= " property_photo = '" . $product['property_photo'] . "',";
     $sqlQuery .= " property_price = '" . $product['property_price'] . "',";
     $sqlQuery .= " property_size = '" . $product['property_size'] . "',";
     $sqlQuery .= " property_ts = '" . $ts . "',";
     $sqlQuery .= " property_status = '" . $product['property_status'] . "',";
 
    $sqlQuery .= " property_type = '". $product['property_type'] . "'";
    
    $sqlQuery .= " WHERE property_id = $propertyID";
    
 
    $result = mysql_query($sqlQuery);
	
	if (!$result) {
		die("error" . mysql_error());
        }
	
    
}

// update contact agent
function updateContact($product) {
    //die ("in update maker");
    $contactID = (int) $product['contact_id'];
    $sqlQuery = "UPDATE contact SET ";
    $sqlQuery .= " contact_name = '". $product['contact_name'] . "',";
    $sqlQuery .= " contact_phone_no = '". $product['contact_phone_no'] . "',";
    $sqlQuery .= " contact_email = '". $product['contact_email'] . "'";
      
    $sqlQuery .= " WHERE contact_id = $contactID";
    
    $result = mysql_query($sqlQuery);
	 
	if (!$result) {
		die("error" . mysql_error());
        }
}

// delete product 
function deleteProperty($id) {
    $pID = (int) $id;
    $sqlQuery = "DELETE FROM property where property_id = $pID";
    
    $result = mysql_query($sqlQuery);
    if (!$result) {
		die("error" . mysql_error());
        }
}


// delete product 
function deletePhoto($id) {
    $pID = (int) $id;
    $sqlQuery = "DELETE FROM photos where photo_id = $pID";
    
    $result = mysql_query($sqlQuery);
    if (!$result) {
		die("error" . mysql_error());
        }
}

// delete contact
function deleteContact($id) {
    $cID = (int) $id;
    $sqlQuery = "DELETE FROM contact where contact_id = $cID";
    
    $result = mysql_query($sqlQuery);
    if (!$result) {
		die("error" . mysql_error());
        }
}

function retrieveProperty($id) {

	$sqlQuery = "SELECT * from property WHERE property_id = $id";

	$result = mysql_query($sqlQuery);
	
	if(!$result) die("error" . mysql_error());

	return mysql_fetch_assoc($result);
	
}

function retrievePhoto($id) {

	$sqlQuery = "SELECT * from photos WHERE photo_id = $id";

	$result = mysql_query($sqlQuery);
	
	if(!$result) die("error" . mysql_error());
	return mysql_fetch_assoc($result);
	
}

function retrieveContact($id) {

	$sqlQuery = "SELECT * from contact WHERE contact_id = $id";

	$result = mysql_query($sqlQuery);
	
	if(!$result) die("error" . mysql_error());
	
	return mysql_fetch_assoc($result);
	
}

function output_edit_link($id) {
	
	return "<a href='edit.php?id=$id'>Edit</a>";
		
}

function output_delete_link($id) {

	return "<a href='delete.php?id=$id'>Delete</a>";

}


function output_delete_contact_link($id) {

	return "<a href='deletecontact.php?id=$id'>Delete</a>";

}


function output_edit_contact_link($id) {
	
	return "<a href='editcontact.php?id=$id'>Edit</a>";

}


function output_edit_photo_link($id) {
	
	return "<a href='editphoto.php?id=$id'>Edit</a>";	
	
}
function output_delete_photo_link($id) {

	return "<a href='deletephoto.php?pid=$id'>Delete</a>";

}

// Formualted drop down with selection in menu
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