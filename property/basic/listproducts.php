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

include_once(APPLICATION_PATH . "/inc/session.inc.php");


/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");

//Set up variable so 'active' class set on navbar link
$activeHome = "active";

include (TEMPLATE_PATH . "/header.html");

?>
<div class="container">
<div class="row">
<div class="span12">
<h1>List Properties</h1>
</div>
</div>
<div clas="row">
<div class="span9">

<?php 

$sqlQuery = "SELECT * FROM property";
$result = mysql_query($sqlQuery);


if ($result) {
	$htmlString = "";
	$htmlString .=  "<table class='table table-bordered table-condensed table-striped' border='1'>\n";
	
	$htmlString .= "<tr>";
	$htmlString .= "<th>ID</th>";
	$htmlString .= "<th>Address Line 1 </th>";
	$htmlString .= "<th>Address Line 2</th>";
	$htmlString .= "<th>Address Line 3</th>";
        $htmlString .= "<th>County</th>";
	$htmlString .= "<th>Type</th>";
        	$htmlString .= "<th>Price</th>";
                	$htmlString .= "<th>Status</th>";
	$htmlString .= "<th colspan='2'>Actions</th>";

	$htmlString .= "</tr>";
	
	while ($product = mysql_fetch_assoc($result))
	{
		$htmlString .=  "<tr>" ;
		$htmlString .=  "<td>";
		$htmlString .=  $product["property_id"];
		$htmlString .=  "</td>";
		$htmlString .=  "<td>";
		$htmlString .=  $product["property_addr1"];
		$htmlString .=  "</td>";
		$htmlString .=  "<td>";
		$htmlString .=  $product["property_addr2"];
		$htmlString .=  "</td>";
		$htmlString .=  "<td>";
		$htmlString .=  $product["property_addr3"];
		$htmlString .=  "</td>";
		$htmlString .=  "<td>";
		$htmlString .=  getCounty($product["property_county"]);//$product["property_county"];
		$htmlString .=  "</td>";
                
		$htmlString .=  "<td>";
		$htmlString .=  getHouseType($product["property_type"]);
		$htmlString .=  "</td>";
                
		$htmlString .=  "<td>";
		$htmlString .=  $product["property_price"];
		$htmlString .=  "</td>";
		$htmlString .=  "<td>";
		$htmlString .=  $product["property_status"];
		$htmlString .=  "</td>";
//		$htmlString .=  "<td><a target=\"_blank\" href=\"http://".UPLOAD_PATH;
		//$htmlString .=  "<td><a target=\"_blank\" href=\"uploads/";
             //   $htmlString .=  $product["imagefile"];
	//	$htmlString .=  "\">".$product["imagefile"]."</a></td>";
	//	$htmlString .=  "<td>";
	//	$htmlString .=  getCountry($product["country_id"]);
	//	$htmlString .=  "</td>";
		
		
		$htmlString .=  "<td>";
		$htmlString .=  output_edit_link($product["property_id"]);
		$htmlString .=  "</td>";
		
		$htmlString .=  "<td>";
		$htmlString .=  output_delete_link($product["property_id"]);
		$htmlString .=  "</td>";
		
		
		
		$htmlString .=  "</tr>\n";
		
	}
	$htmlString .=  "</table>\n";
	
	echo $htmlString ;
	
	
	
} else {
	
	die("Failure: " . mysql_error($link_id));
}
?>
</div>
<div class="span3"></div>

</div>


</div> <!-- /container -->
<?php 
include (TEMPLATE_PATH . "/footer.html");
?>
