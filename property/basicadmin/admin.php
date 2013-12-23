<?php
/*
 * Display a the properties in a grid 3 houses per row
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
<h1>Properties </h1>
</div>
</div>
<div clas="row">
<div class="span9">

<?php 
// cross join
$sqlQuery = "SELECT a.property_addr1,
                    a.property_addr2,
                    a.property_addr3,
                    a.property_county,
                    a.property_price,
                    a.property_size,
                    a.property_type,
                    a.property_status,
                    a.property_desc,
                    a.property_id,
                    a.property_ts,
                    a.property_date_created,
                    b.file_content,
                    b.file_type,
                    b.file_size,
                    b.file_name,
                    b.file_extension,
                    b.title
            FROM property a, photos b
            where a.property_photo = b.photo_id";
$result = mysql_query($sqlQuery);


if ($result) {
    	$htmlString = "";

	$counter =0; //modulo division allows 3 houses per row
        $htmlString = "
            <div class=\"row\">";
       
	while ($product = mysql_fetch_assoc($result))
	{ 
            $counter++;
             $htmlString .="<div class=\"col-sm-6 col-md-4\">";
    $htmlString .= "<div class=\"thumbnail\">";
    $htmlString .=   "<img width=\"350\" height=\"350\" src=\"data:image/jpeg;base64,". 
           base64_encode( $product['file_content'] ) . "\" />";
      $htmlString .="<div class=\"caption\">";
      //  $htmlString.="<h3>".$product["file_name"]."</h3>";
        $htmlString.="<p><strong>Address</strong>".$product["property_addr1"]."<br>";
        $htmlString.= $product["property_addr2"]."<br>";
        $htmlString.= $product["property_addr3"]."</p>";
        $htmlString.="<p><strong>County </strong> ".getCounty($product["property_county"])."</p>";
        $htmlString.="<p><strong>Description </strong>".$product["property_desc"]."</p>";
        $htmlString.="<p><strong>Status </strong>".$product["property_status"]."</p>";
        $htmlString.="<p><strong>Price &euro; </strong>".$product["property_price"]."</p>";
         $dateposted = date('d-m-Y',strtotime($product['property_ts']));
        $htmlString.="<p><strong>Date Edited: </strong> ". $dateposted . "</p>";
         $datecreated = date('d-m-Y',strtotime($product['property_date_created']));
        $htmlString.="<p><strong>Date Posted: </strong> ". $datecreated . "</p>";
        $htmlString.="<p><a href=\"propertydetails.php?property_id=".$product['property_id']."\" class=\"btn btn-primary\" role=\"button\">Property Details</a> </p>";
    //        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>";
      $htmlString.="</div>
    </div>
  </div>";
      
		$htmlString .=  "</tr>\n";
		if (($counter % 3) ==0) {
                    $htmlString.= " </div> <div class=\"row\">"; // carriage return new line on grid!
                } // if
	
                
                } // While
	$htmlString .=  "</div>";
	
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
