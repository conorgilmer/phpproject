<?php
/*
 * List the 32 Counties for property application
 */
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
<h1>Counties</h1>
<p>List of Counties.</p>
</div>
</div>
<div clas="row">
<div class="span9">

<?php 

$sqlQuery = "SELECT * FROM counties";
$result = mysql_query($sqlQuery);


if ($result) {
	$htmlString = "";
	$htmlString .=  "<table class='table table-bordered table-condensed table-striped' border='1'>\n";
	
	$htmlString .= "<tr>";
	$htmlString .= "<th>ID</th>";
	$htmlString .= "<th>County Name</th>";
//	$htmlString .= "<th colspan='2'>Actions</th>"; // for now not going to add/delete counties

	$htmlString .= "</tr>";
	
	while ($product = mysql_fetch_assoc($result))
	{
		$htmlString .=  "<tr>" ;
		$htmlString .=  "<td>";
		$htmlString .=  $product["county_id"];
		$htmlString .=  "</td>";
		$htmlString .=  "<td>";
		$htmlString .=  $product["county_name"];
		$htmlString .=  "</td>";
		
		/* for now going to stick with the 32 counties
		$htmlString .=  "<td>";
		$htmlString .=  output_edit_link($product["county_id"]);
		$htmlString .=  "</td>";
		
		$htmlString .=  "<td>";
		$htmlString .=  output_delete_link($product["county_id"]);
		$htmlString .=  "</td>";
		*/
		
		
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
