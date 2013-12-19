<?php
session_start();
/* * Set up constant to ensure include files cannot be called on their own*/
define ( "MY_APP", 1 );
/* Set up a constant to your main application path*/
define ( "APPLICATION_PATH", "application" );
define ( "TEMPLATE_PATH", APPLICATION_PATH . "/view" );

/* Prevent unauthorised access */
include_once(APPLICATION_PATH . "/inc/session.inc.php");

/* * Include the config.inc.php file*/
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");
include (APPLICATION_PATH . "/inc/queries.inc.php");
include (APPLICATION_PATH . "/inc/ui_helpers.inc.php");

$acceptable_extensions[0] = "JPG";
$acceptable_extensions[1] = "jpg";
$acceptable_extensions[2] = "gif";
$acceptable_extensions[3] = "GIF";
$acceptable_extensions[4] = "PNG";
$acceptable_extensions[5] = "png";

$photo = array();
$photo['title'] = "";
$photo['prop_id'] = 0;
$photo['photo_id'] = 0;
$photo['file_name'] = "";
$photo['file_type'] = "";
$photo['file_extension'] = "";

if (!empty($_POST)) {
	
	$photo = array();
	$photo['title'] = htmlspecialchars(strip_tags($_POST["title"])); 
        $flashMessage = "";
        $photo['photo_id'] = isset($_POST["photo_id"]) ? (int) $_POST["photo_id"] : 0;
       
        $validated = 1;
        
        if ($photo['photo_id'] == 0) {

if($_FILES && $_FILES['file']['name']){
            
    //make sure the file has a valid file extension
    
    $file_info = pathinfo($_FILES['file']['name']);
    $acceptable_ext = 0;
                
    for($x = 0; $x < count($acceptable_extensions); $x++){
                    
        if($file_info['extension'] == $acceptable_extensions[$x]){
            $acceptable_ext = 1;
                        
        }
    }
                
    if(!$acceptable_ext){
        $validated = 0;
    }   
}else{
    $validated = 0;
}

//Now that we're sure we have a valid file, 
//we'll add it into the database

if($validated){

    // Get important information about the file and put it into variables
    
    $filetitle = $_POST['title'];
    $prop_id = $_POST['prop_id'];
    $file_ts = time();
    $fileName = $_FILES['file']['name'];
    $tmpName  = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];

    // Slurp the content of the file into a variable
                    
    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if(!get_magic_quotes_gpc()){
        $fileName = addslashes($fileName);
     }
                    
    $file_info = pathinfo($_FILES['file']['name']);

    $sql = "INSERT INTO photos SET 
                title = '".$filetitle."', 
                file_name = '".$fileName."', 
                file_type = '".$fileType."',
                file_size = '".$fileSize."',
                file_content = '".$content."',
                file_extension = '".$file_info['extension']."',
                file_ts = '".$file_ts."',
                prop_id = '".$prop_id."'";
                
                
    $result = mysql_query($sql);
            
    // If the query was successful, give success message

    if(!$result){
        $flashMessage = "Could not add this file.";    
    } 
    else{
        $flashMessage =  "New file successfully added.";
    }
}else{
    $flashMessage = "Invalid file.";    
}
        

        } else 
            
        {
        $photoID =    $photo['photo_id'];
            
            
if($_FILES && $_FILES['file']['name']){
            
    //make sure the file has a valid file extension
    
    $file_info = pathinfo($_FILES['file']['name']);
    $acceptable_ext = 0;
                
    for($x = 0; $x < count($acceptable_extensions); $x++){
                    
        if($file_info['extension'] == $acceptable_extensions[$x]){
            $acceptable_ext = 1;
                        
        }
    }
                
    if(!$acceptable_ext){
        $validated = 0;
    }   
}else{
    $validated = 0;
}

//Now that we're sure we have a valid file, 
//we'll add it into the database

if($validated){

    // Get important information about the file and put it into variables
    
    $filetitle = $_POST['title'];
    $prop_id = $_POST['prop_id'];
    $file_ts = time();
    $fileName = $_FILES['file']['name'];
    $tmpName  = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];

    // Slurp the content of the file into a variable
                    
    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if(!get_magic_quotes_gpc()){
        $fileName = addslashes($fileName);
     }
                    
    $file_info = pathinfo($_FILES['file']['name']);

    $sql = "Update photos SET 
                title = '".$filetitle."', 
                file_name = '".$fileName."', 
                file_type = '".$fileType."',
                file_size = '".$fileSize."',
                file_content = '".$content."',
                file_extension = '".$file_info['extension']."',
                file_ts = '".$file_ts."',
                prop_id = '".$prop_id."'  where photo_id = $photoID";
                
                
    $result = mysql_query($sql);
            
    // If the query was successful, give success message

    if(!$result){
        $flashMessage = "Could not add this file.";    
    } 
    else{
        $flashMessage =  "New file successfully added.";
    }
}else{
    $flashMessage = "Invalid file.";    
}
            
            
        }
            
        
	
	}//end post
	
?>
<?php 
$activeInsert = "active";
$buttonLabel = "Insert File";
include (TEMPLATE_PATH . "/header.html");
include (TEMPLATE_PATH . "/form_file.html");
include (TEMPLATE_PATH . "/footer.html");
?>