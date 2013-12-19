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
$product['property_addr1'] = "";
$product['property_addr2'] = "";
$product['property_addr3'] ="";
$product['property_county'] ="";
$product['property_type'] ="";
$product['property_desc'] ="";
$product['property_price']="";
$product['property_size'] ="";
$product['property_status'] ="";
$product['product_contact']="";
$product['property_photo'] ="";
$product['property_ts'] ="";
$product['property_id'] =0;

if (!empty($_POST)) {
	
	
	$product = array();
	$product['property_addr1'] = htmlspecialchars(strip_tags($_POST["addr1"]));
	$product['property_addr2'] = htmlspecialchars(strip_tags($_POST["addr2"]));
	$product['property_addr3'] = htmlspecialchars(strip_tags($_POST["addr3"]));
	$product['property_county'] = (int) htmlspecialchars(strip_tags($_POST["county_id"]));
	$product['property_type'] = (int) htmlspecialchars(strip_tags($_POST["housetype_id"]));
        $product['property_price'] = htmlspecialchars(strip_tags($_POST["price"]));
        $product['property_size']  = htmlspecialchars(strip_tags($_POST["size"]));
        $product['property_desc']  = htmlspecialchars(strip_tags($_POST["desc"]));
       
        $product['property_status'] = htmlspecialchars(strip_tags($_POST["status"]));
        $product['property_contact'] = (int) htmlspecialchars(strip_tags($_POST["contact_id"]));
	$product['property_photo'] = (int) htmlspecialchars(strip_tags($_POST["photo_id"]));
	//$product['property_date_created']  = htmlspecialchars(strip_tags($_POST["date_created"]));
        
        $product['property_date_created'] = isset($_POST["property_date_created"]) ? (int) $_POST["property_date_created"] : 0;
           
        $product['property_id'] = isset($_POST["property_id"]) ? (int) $_POST["property_id"] : 0;
        
        
        $flashMessage = "";
	if (validateProperty($product)) {
		if ($product['property_id'] == 0) {
         //New! Save Movie returns the id of the record inserted         
		$product_id = saveproduct($product);
		//uploadFiles($property_id);
		
		
		$flashMessage = "Record has been saved";
                } else {
                    //update product record and upload new file
                    updateProperty($product);
                   // uploadFiles($product['property_id']);
	         //flash record updated
        	    $flashMessage = "Record has been updated";
                	
               //     header("Location: listproducts.php");
                }
        } else
            $flashMessage = ("invalid values entered");
	
	
	}//end post
	

?>
<?php 
$activeInsert = "active";
$buttonLabel = "Insert New Property";
include (TEMPLATE_PATH . "/header.html");
include (TEMPLATE_PATH . "/form_insert.html");
include (TEMPLATE_PATH . "/footer.html");
?>