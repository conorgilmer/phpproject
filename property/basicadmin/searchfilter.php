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

//Set up variable so 'active' class set on navbar link
$activeHome = "active";

include (TEMPLATE_PATH . "/public/header.html");

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



$select = "SELECT * FROM counties";
    $result = mysql_query($select);
    if (!$result) { die ('Error: ' . mysql_error()); };

// Store a distinct list of all cities in the table in an array
    $countyname = array();
    $count = 0;

    while ($row = mysql_fetch_array($result)) { 
        $count++;
        $countyname[$count] = $row['county_name'];
    }

$select1 = "SELECT * FROM housetype";
    $result1 = mysql_query($select1);
    if (!$result1) { die ('Error: ' . mysql_error()); };

// Store a distinct list of all cities in the table in an array
    $housetype = array();
    $count1 = 0;

    while ($row1 = mysql_fetch_array($result1)) { 
        $count1++;
        $housetype[$count1] = $row1['housetype_name'];
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
 County 
<!-- When an option is selected, it runs firstly() -->
    <select name="third" onchange="thirdly(this)">
        <option selected value=""></option>
            <?php 
      // Loop through all the entries in $housetype value =ID and create an option for each one
            for ($i = 1; $i <= count($countyname); ++$i) {
                echo "<option value='" . $i . "'>" . $countyname[$i] . "</option>";
            }
            ?>
    </select>
 
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
<!--
Minimum Price
<select name="min" onchange="">
    <option value="50000">&euro; 50,000</option>
<option value="100000">&euro; 100,000</option>
<option value="150000">&euro; 150,000</option>
<option value="200000">&euro; 200,000</option>
<option value="250000">&euro; 250,000</option>
<option value="300000">&euro; 300,000</option>
<option value="350000">&euro; 350,000</option>
<option value="400000">&euro; 400,000</option>
<option value="450000">&euro; 450,000</option>
<option value="500000">&euro; 500,000</option>


</select>

Maximum Price
<select name="max" onchange="">
    
<option value="100000">&euro; 100,000</option>
<option value="150000">&euro; 150,000</option>
<option value="200000">&euro; 200,000</option>
<option value="250000">&euro; 250,000</option>
<option value="300000">&euro; 300,000</option>
<option value="350000">&euro; 350,000</option>
<option value="400000">&euro; 400,000</option>
<option value="450000">&euro; 450,000</option>
<option value="500000">&euro; 500,000</option>
<option value="600000">&euro; 600,000</option>
<option value="700000">&euro; 700,000</option>
<option value="800000">&euro; 800,000</option>
<option value="900000">&euro; 900,000</option>
<option value="1000000">&euro; 1000,000</option>
<option value="1500000">&euro; 1500,000</option>

<option value="2000000">&euro; 1000,000</option>
<option value="2500000">&euro; 1000,000</option>
<option value="3000000">&euro; 1000,000</option>
<option value="10000000">&euro; No Limit</option>

</select>
-->
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
include (TEMPLATE_PATH . "/public/footer.html");
?>
