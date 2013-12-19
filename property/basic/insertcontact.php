<?php
session_start();
/*
 * Set up constant to ensure include files cannot be called on their own
*/
define ( "MY_APP", 1 );
/*
 * Set up a constant to your main application path
 */
define ( "APPLICATION_PATH", "application" );
define ( "TEMPLATE_PATH", APPLICATION_PATH . "/view" );

/* Prevent unauthorised access */
include_once(APPLICATION_PATH . "/inc/session.inc.php");

/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");
include (APPLICATION_PATH . "/inc/queries.inc.php");
include (APPLICATION_PATH . "/inc/ui_helpers.inc.php");
$contact = array();
$contact['contact_name'] = "";
$contact['contact_phone_no'] = "";
$contact['contact_email'] = "";
$contact['contact_id'] =0;

if (!empty($_POST)) {
	
	
	$contact = array();
	$contact['contact_name'] = htmlspecialchars(strip_tags($_POST["contact_name"]));
	$contact['contact_phone_no'] = htmlspecialchars(strip_tags($_POST["contact_phone_no"]));
        $contact['contact_email'] = htmlspecialchars(strip_tags($_POST["contact_email"]));
        $contact['contact_id'] = isset($_POST["contact_id"]) ? (int) $_POST["contact_id"] : 0;
        
        $flashMessage = "";
	if (validateContact($contact)) {
		if ($contact['contact_id'] == 0) {
         //SaveContactreturns the id of the record inserted         
		$contact_id = saveContact($contact);
			
		$flashMessage = "Record has been saved";
                } else {
                    //update product record and upload new file
                    updateContact($contact);
	         //flash record updated
        	  //  $flashMessage = "Record has been updated for Contact";
                	// redirect to the contacts list page
                    header("Location: contacts.php");
                }	
	}
        $flashMessage = "Invalid Fields entered";
	}//end post
	

?>
<?php 
$activeInsert = "active";
$buttonLabel = "Insert New Contact";
include (TEMPLATE_PATH . "/header.html");
include (TEMPLATE_PATH . "/form_contact.html");
include (TEMPLATE_PATH . "/footer.html");
?>