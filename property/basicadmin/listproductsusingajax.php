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
<h1>Search</h1>
</div>
</div>
    <div class="row">
<div class="span12">

<!--form>
<select name="propertybystatus" onchange="showByStatus(this.value)">
<option value="">Select a status:</option>
<option value="For Sale">For Sale</option>
<option value="Sale Agreed">Sale Agreed</option>
<option value="Sold">Sold</option>
</select>
</form>

    
    <form>
<select name="propertybytype" onchange="showByType(this.value)">
<option value="">Select a type:</option>
<option value="1">Apartment</option>
<option value="2">Detached</option>
<option value="3">Semi-detached</option>
<option value="4">Terraced</option>
<option value="5">Factory</option>

</select>
</form-->
<?php
$select = "SELECT * FROM housetype";
    $result = mysql_query($select);
    if (!$result) { die ('Error: ' . mysql_error()); };

// Store a distinct list of all cities in the table in an array
    $housetype = array();
    $count = 0;

    while ($row = mysql_fetch_array($result)) { 
        $count++;
        $housetype[$count] = $row['housetype_name'];
    }

$select2 = "SELECT * FROM status";
    $result2 = mysql_query($select2);
    if (!$result2) { die ('Error: ' . mysql_error()); };

// Store a distinct list of all cities in the table in an array
    $status = array();
    $count2 = 0;

    while ($row2 = mysql_fetch_array($result2)) { 
        $count2++;
        $status[$count2] = $row2['status_name'];
    //    echo "status ". $row2['status_name'];
    }
?>
<form>
 House Type   
<!-- When an option is selected, it runs firstly() -->
    <select name="first" onchange="firstly(this)">
        <option selected value=""></option>
            <?php 
      // Loop through all the entries in $housetype value =ID and create an option for each one
            for ($i = 1; $i <= count($housetype); ++$i) {
                echo "<option value='" . $i . "'>" . $housetype[$i] . "</option>";
            }
            ?>
    </select>

Status  
<!-- Repeat the process for the destination city -->
    <select name="second" onchange="secondly(this)">
        <option selected value=""></option>
            <?php 
            for ($i = 1; $i <= count($status); ++$i) {
                echo "<option value='" . $status[$i] . "'>" . $status[$i] . "</option>";
            }
            ?>
    </select>
<br />
</form>

<!-- -->
</div>
</div>
<div class="row">
<div class="span12">
<h1>List Properties</h1>
</div>
</div>
<div clas="row">
<div class="span9">
<!--div id="txtHint"><b>Properties.</b></div-->
 <div id="properties"></div>


</div>
<div class="span3"></div>

</div>


</div> <!-- /container -->
<?php 
include (TEMPLATE_PATH . "/footer.html");
?>
