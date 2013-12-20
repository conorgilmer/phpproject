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

//include_once(APPLICATION_PATH . "/inc/session.inc.php");


/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");
include (APPLICATION_PATH . "/inc/ui_helpers.inc.php");

include (APPLICATION_PATH . "/inc/queries.inc.php");
//Set up variable so 'active' class set on navbar link
$activeHome = "active";

include (TEMPLATE_PATH . "/header.html");

?>
<div class="container">
<div class="row">
<div class="span12">
<h1>Search Houses Database</h1>
<p></p>
</div>
</div>
<div clas="row">
<div class="span9">
   <form action="searchresults.php" method="post">
     
    
           <div class="control-group">
		<label class="control-label" for="County">County</label>
		<div class="controls">
		<?php 
                $records = counties_get_all();
            	$product['county_id'] = 0;
		$arrayItems1=array();
                $count = sizeof($records);
		for($i=0; $i < $count; $i++) {
                    $arrayItems1[$i]["label"]=$records[$i]['county_name'];
                    $arrayItems1[$i]["id"]=$records[$i]['county_id'];	
		}

        echo uihelperSelect('countysearch',$arrayItems1,0) ?>
		</div>
	</div>
       
               <div class="control-group">
		<label class="control-label" for="HouseType">House Type</label>
		<div class="controls">
		<?php 
                $records = housetype_get_all();
            	$product['housetype_id'] = 0;
		$arrayItems1=array();
                $count = sizeof($records);
		for($i=0; $i < $count; $i++) {
                    $arrayItems1[$i]["label"]=$records[$i]['housetype_name'];
                    $arrayItems1[$i]["id"]=$records[$i]['housetype_id'];	
		}

        echo uihelperSelect('typesearch',$arrayItems1,0) ?>
		</div>
	</div>
   
       
       
    <input type="submit" name="submit" value="Submit" />
    </form>
    
<?php 

?>
</div>
<div class="span3"></div>

</div>


</div> <!-- /container -->
<?php 
include (TEMPLATE_PATH . "/footer.html");
?>