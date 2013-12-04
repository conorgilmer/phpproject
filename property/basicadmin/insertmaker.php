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
$product = array();
$product['mf_title'] = "";
$product['mf_id'] =0;


if (!empty($_POST)) {
	
	$product = array();
	$product['mf_title'] = htmlspecialchars(strip_tags($_POST["mf_title"]));
//	$product['mf_id'] = (int) htmlspecialchars(strip_tags($_POST["mf_id"]));
        $product['mf_id'] = isset($_POST["mf_id"]) ? (int) $_POST["mf_id"] : 0;
        
	$flashMessage = "";
	if (validateProduct($product)) {
		if ($product['mf_id'] == 0) {
         //New! Save Movie returns the id of the record inserted         
		$mf_id = saveMaker($product);
	//	uploadFiles($product_id);
		
		
		$flashMessage = "Record has been saved";
                } else {
                    
                    updateMaker($product);
                        header("Location: listmakers.php");
                }		
		
	}
	
	

	
	
	}//end post
	

?>
<?php 
$activeInsert = "active";
$buttonLabel = "Insert New Maker";
include (TEMPLATE_PATH . "/header.html");
include (TEMPLATE_PATH . "/form_maker_insert.html");
include (TEMPLATE_PATH . "/footer.html");
?>