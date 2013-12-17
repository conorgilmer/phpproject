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
 if(isset($_GET['photo_id']) && is_numeric($_GET['photo_id'])) {
   

$sqlQuery = "SELECT * FROM photos where photo_id=".$_GET['photo_id'];
$result = mysql_query($sqlQuery);


if ($result) {
	$htmlString = "";
        $product = mysql_fetch_assoc($result);

        $htmlString = "<p>".$product["title"]."</p>
          
            <div class=\"row\">";
            $htmlString .="<div class=\"col-sm-6 col-md-4\">";
            $htmlString .= "<div class=\"thumbnail\">";
            $htmlString .=   "<img width=\"300\" height=\"300\" src=\"data:image/jpeg;base64,". 
           base64_encode( $product['file_content'] ) . "\" />";
            $htmlString .="<div class=\"caption\">";
            $htmlString.="<p>File Name : ".$product["file_name"]."</p>";
            $htmlString.="<p>File Size : ".$product["file_size"]."</p>";
            $htmlString.="<p>File Type : ".$product["file_type"]."</p>";
            $htmlString.="<p>Property Id :".$product["prop_id"]."</p>";
          
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
