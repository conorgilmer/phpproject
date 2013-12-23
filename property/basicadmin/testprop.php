<?php
$conn = mysql_connect('localhost','root','');
 if(!$conn){
  die('Mysql connection error '.mysql_error());
 }
 else
echo "connected";

 $db = mysql_select_db('property',$conn);
 if(!$db){
  die('Database selection failed '.mysql_error());
 }
 
 $sql = 'SELECT * FROM property";
 echo $sql;
 $result = mysql_query($sql,$conn);
 
 
 $data = array();





// while($row = mysql_fetch_array($result)){
//  $row_data = array(
 //  'addr1' => $row['property_addr1'], 
  // 'addr2' => $row['property_addr2'] 
  // );
 // array_push($data, $row_data);
// }
 
 //echo json_encode($data);
?>
