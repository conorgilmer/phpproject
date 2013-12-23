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

//include_once(APPLICATION_PATH . "/inc/session.inc.php");


/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");

//Set up variable so 'active' class set on navbar link
$activeHome = "active";

include (TEMPLATE_PATH . "/public/header.html");

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
/*$sqlQuery = "SELECT a.property_addr1,
                    a.property_addr2,
                    a.property_addr3,
                    a.property_county,
                    a.property_price,
                    a.property_size,
                    a.property_type,
                    a.property_status,
                       a.property_desc,
                    a.property_id,
                    b.file_content,
                    b.file_type,
                    b.file_size,
                    b.file_name,
                    b.file_extension,
                    b.title
            FROM property a, photos b
            where a.property_photo = b.photo_id";

 */
$sqlQuery ="select * 
FROM property a, housetype b, contact c, photos d
WHERE a.property_type = b.housetype_id
AND a.property_contact = c.contact_id
AND a.property_photo = d.photo_id";
$result = mysql_query($sqlQuery);
 


if ($result) {
    	$htmlString = "";

	
        $htmlString .= "
            <div class=\"media\">";
       
	while ($product = mysql_fetch_assoc($result))
	{ 
           if ($product['property_status'] == "Sold")
               
            $statusString="<p><strong>Status </strong>***".$product["property_status"]."***</p>";
           else
            $statusString="<p><strong>Status </strong>".$product["property_status"]."</p>";
       
            
            
    $htmlString .=   "<div class=\"thumbnail\"> <a class=\"pull-right\" href=\"#\">
    <img class=\"media-object\" width=150 height=150 src=\"data:image/jpeg;base64,". 
           base64_encode( $product['file_content'] ) . "\" /></a>";
      $htmlString .="<div class=\"media-body\">";
      
      
        $htmlString.="<h4 class=\"media-heading\"><strong>Address:  </strong>".$product["property_addr1"].", ";
        $htmlString.= $product["property_addr2"].", ";
        $htmlString.= $product["property_addr3"].
                ", <strong>County </strong> ".getCounty($product["property_county"])."</h4>";
        $htmlString.="<table><tr><td Style=\"white-space: normal; width:400px;\"><p><strong>Type </strong>". getHouseType($product["property_type"])."</p>";
       $htmlString.="<p><strong>Description </strong>".$product["property_desc"]."</p>";
       
       // $htmlString.="<p><strong>Status </strong>".$product["property_status"]."</p>";
       $htmlString.=$statusString; 
       $htmlString.="<p><strong>Price &euro; </strong>".$product["property_price"]."</p>";
        $htmlString.="</td><td>";
        $htmlString.="<p><strong>Agent Details</strong></p>";
        $htmlString.="<p><strong>Name </strong>".$product["contact_name"]."</p>";
        $htmlString.="<p><strong>Email </strong>".$product["contact_email"]."</p>";
        $htmlString.="<p><strong>Phone No. </strong>".$product["contact_phone_no"]."</p>";
             $dateposted = date('d-m-Y',strtotime($product['property_ts']));
        $htmlString.="<p><strong>Date Posted: </strong> ". $dateposted . "</p>";
   
        $htmlString.="</td></tr></table>";
        $htmlString.="<p><a href=\"propertydetailsopen.php?property_id=".$product['property_id']."\" class=\"btn btn-primary\" role=\"button\">Property Details</a> </p>";
    //        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>";
      $htmlString.="</div>
    </div>
  ";
      
		
                
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
include (TEMPLATE_PATH . "/public/footer.html");
?>
