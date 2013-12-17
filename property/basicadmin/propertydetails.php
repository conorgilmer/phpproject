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
<h1>Photo Detail</h1>
</div>
</div>
<div clas="row">
<div class="span9">

<?php 
 if(isset($_GET['property_id']) && is_numeric($_GET['property_id'])) {
   

$sqlQuery = "SELECT a.property_addr1,
                    a.property_addr2,
                    a.property_addr3,
                    a.property_county,
                    a.property_price,
                    a.property_size,
                    a.property_type,
                    a.property_status,
                    a.property_id,
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
        $product = mysql_fetch_assoc($result);

        $htmlString = "<p>".$product["title"]."</p>
          
            <div class=\"row\">";
               $htmlString .="<div class=\"col-sm-6 col-md-4\">";
    $htmlString .= "<div class=\"thumbnail\">";
    $htmlString .=   "<img width=\"100\" height=\"100\" src=\"data:image/jpeg;base64,". 
           base64_encode( $product['file_content'] ) . "\" />";
      $htmlString .="<div class=\"caption\">";
      //  $htmlString.="<h3>".$product["file_name"]."</h3>";
        $htmlString.="<p>".$product["property_addr1"]."<br>";
        $htmlString.= $product["property_addr2"]."<br>";
        $htmlString.= $product["property_addr3"]."</p>";
        $htmlString.="<p>".$product["title"]."</p>";
        $htmlString.="<p>".$product["property_status"]."</p>";
        $htmlString.="<p>Price ".$product["property_price"]."</p>";
            $htmlString.="</div>
    </div>
  </div>";
    $htmlString .=  "</div>";
	
	echo $htmlString ;
	
	
	
} else {
	
	die("Failure: " . mysql_error($link_id));
}

       
    }
    else {
        echo 'File not selected';
    }?>
</div>
<div class="span3"></div>

</div>


</div> <!-- /container -->
<?php 
include (TEMPLATE_PATH . "/footer.html");
?>
