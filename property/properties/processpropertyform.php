<?php
   // Define path to application directory
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
     
 require_once(APPLICATION_PATH .'/config/common.inc.php');
 require_once('FormProperty.php');
 
// echo "I am process form;";
 
 if (!empty($_POST)) {
   // echo print_r($_POST);
 
 $form = new FormProperty();
 
 if ($form->isValid($_POST)) {
     
     $validValues = $form->getValues();
     //print_r($validValues);
     //echo "form is valid";
     
     $dbPropertyTable = new Zend_DB_Table('property');
     
     
     
     
 if ($_POST['property_id'] == 0)    { 
    $property_id =  $dbPropertyTable->insert(array(
      'property_id' => null,
      'property_addr1' => $validValues['property_addr1'],
      'property_addr2' => $validValues['property_addr2'],
      'property_addr3' => $validValues['property_addr3'],
      'property_county' => $validValues['property_county'],
        
      'property_contact' => $validValues['property_contact'],
      'property_photo' => $validValues['property_photo'],
      'property_type' => $validValues['property_type'],
      'property_price' => $validValues['property_price'],
      'property_size' => $validValues['property_size'],
      'property_status' => $validValues['property_status'],
  
      'property_ts' => $validValues['property_ts']
  
  
     ));
    
   // print "<p>REcord is $property_id";
     
    
           header("location: index.php?action=listproperties");
       
 }//end insert
 else {
      $property_id =  $dbPropertyTable->update(array(
         'property_addr1' => $validValues['property_addr1'],
           'property_addr2' => $validValues['property_addr2'],
      'property_addr3' => $validValues['property_addr3'],
      'property_county' => $validValues['property_county'],
      'property_contact' => $validValues['property_contact'],
      'property_photo' => $validValues['property_photo'],
      'property_type' => $validValues['property_type'],
      'property_price' => $validValues['property_price'],
      'property_size' => $validValues['property_size'],
      'property_status' => $validValues['property_status'],
      'property_ts' => $validValues['property_ts']
     ),'property_id = ' . $_POST['property_id']);
     //echo "updating the movie";
 
      
           header("location: index.php?action=listproperties");
       
 }
     
 } else echo "form is NOT valid";
 
 }
